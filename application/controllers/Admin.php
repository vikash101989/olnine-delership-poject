<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$this->load->view('site/db_header');
			$this->load->view('admin/dashboard');
			$this->load->view('site/db_footer');
		} else {
			$this->load->view('admin/login');
		}
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if (!empty($email) && !empty($password)) {
			$where = ['email' => $email, 'password' => md5($password), 'status' => '1', 'role' => 'admin'];
			$response = $this->admin_model->get_data('application', 'name, email, role, id, mobile', $where);
			if (!empty($response)) {
				$session_data = [
					'role' => $response[0]['role'],
					'userid' => $response[0]['id'],
					'fname' => $response[0]['name'],
					'email' => $response[0]['email'],
					'mobile' => $response[0]['mobile']
				];

				$this->session->set_userdata($session_data);
				$msg = 'Welcome ' . ucfirst($response[0]['name']);
				$this->session->set_flashdata('successmsg', $msg);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('errormsg', 'Invalid Mobile or password');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('errormsg', 'All Field are required');
			redirect('admin');
		}
	}

	public function dashboard()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data = $this->admin_model->row_counts('application', ['role' => 'customer'], ['status']);
			$this->load->view('site/db_header');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	public function applications()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['applications'] = $this->admin_model->get_data('application', '*', ['role' => 'customer']);
			$userIds = array_column($data['applications'], 'id');
			$payments = $this->admin_model->get_data('payment', 'userid, amount', ['type' => 1], ['userid' => $userIds]);
			foreach ($payments as $payment) {
				$data['payments'][$payment['userid']] = $payment['amount'];
			}
			$this->load->view('site/db_header', $data);
			$this->load->view('admin/application_list', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	public function application_list()
	{
		$this->load->view('site/db_header');
		$this->load->view('admin/application_list');
		$this->load->view('site/db_footer');
	}

	function view_application($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['application'] = $this->admin_model->get_data('application', '*', ['id' => $id]);
			if (!empty($data['application'])) {
				$data['application'] = $data['application'][0];
				$data['application']['status'] = $data['application']['loan_appr_status'] == 1 ? 'Approved' : 'Pending';
			}
			$this->load->view('site/db_header');
			$this->load->view('admin/application_view', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}
	function edit_application($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['application'] = $this->admin_model->get_data('application', '*', ['id' => $id]);
			if (!empty($data['application'])) {
				$data['application'] = $data['application'][0];
				$data['application']['status'] = $data['application']['loan_appr_status'] == 1 ? 'Approved' : 'Pending';
				$this->load->view('site/db_header');
				$this->load->view('admin/application_edit', $data);
				$this->load->view('site/db_footer');
			} else {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('admin/applications');
			}

		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('successmsg', 'Successfully Logout');
		$this->session->sess_destroy();
		redirect("admin");
	}

	public function generate_pdf_and_send_email()
	{
		// Load required libraries
		$this->load->config('email');
		$this->load->library('email');
		$application_id = $this->input->get('id');
		$download = $this->input->get('download');
		$type = $this->input->get('type');

		// Fetch application data
		$application = $this->admin_model->get_data('application', '*', ['id' => $application_id]);
		if (empty($application)) {
			$this->session->set_flashdata('errormsg', 'Application not found.');
			redirect('admin/applications');
			return;
		}
		$application = $application[0];
		$transaction_ref = $this->generateSecureTransactionRef();
		$application['transaction_ref'] = $transaction_ref;
		$payment = $this->admin_model->get_data('payment', '*', ['userid' => $application_id, 'type' => 'Approval']);

		// Concatenate address parts only if not empty
		$address_parts = [];
		if (!empty($application['address']))
			$address_parts[] = $application['address'];
		if (!empty($application['district']))
			$address_parts[] = $application['district'];
		if (!empty($application['state']))
			$address_parts[] = $application['state'];
		if (!empty($application['city']))
			$address_parts[] = $application['city'];
		if (!empty($application['pincode']))
			$address_parts[] = $application['pincode'];
		$application['address'] = implode(', ', $address_parts);
		$bankDetails = $this->admin_model->get_data('bankdetails', 'id, bank_name, beneficiary_name, account_no, ifsc_code, bank_branch')[0];

		// Generate PDF content using a view
		$html = $this->load->view('temp/approval_letter', ['application' => $application, 'payments' => $payment, 'bankDetails' => $bankDetails], true);
		$options = new Options();
		$options->set('isRemoteEnabled', true);
		$options->set('isHtml5ParserEnabled', true);
		$options->set('isPhpEnabled', true);
		$options->set('isFontSubsettingEnabled', true);
		$options->set('isCssBackgroundEnabled', true); // ✅ allow backgrounds

		$dompdf = new Dompdf($options);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'portrait');
		$dompdf->render();
		$temp_pdf = FCPATH . '/uploads/' . str_replace(' ', '_', strtolower($application['name'])) . '_approval_letter.pdf';
		file_put_contents($temp_pdf, $dompdf->output());

		if ($download) {
			$this->load->helper('download');
			force_download(str_replace(' ', '_', strtolower($application['name'])) . '_approval_letter.pdf', file_get_contents($temp_pdf));
			unlink($temp_pdf);
			return;
		}

		// Send PDF as email attachment
		$this->email->from('your@email.com', 'Admin');
		$this->email->to($application['email']);
		$this->email->subject('Your Application PDF');
		$this->email->message('Please find attached your application PDF.');
		$this->email->attach($temp_pdf);

		if ($this->email->send()) {
			$this->session->set_flashdata('successmsg', 'PDF generated and sent to email.');
		} else {
			$this->session->set_flashdata('errormsg', 'Failed to send email.');
		}

		unlink($temp_pdf);
		redirect('admin/view_application/' . $application_id);
	}




	function generateSecureTransactionRef($length = 16)
	{
		try {
			$bytes = random_bytes(ceil($length / 2)); // Generate enough bytes for hex conversion
			return substr(bin2hex($bytes), 0, $length); // Convert to hexadecimal and truncate
		} catch (Exception $e) {
			// Handle error if random_bytes fails (e.g., insufficient entropy)
			return false; // Or throw an exception
		}
	}

	function test()
	{
		$application = $this->admin_model->get_data('application', '*', ['id' => 621]);
		if (empty($application)) {
			$this->session->set_flashdata('errormsg', 'Application not found.');
			redirect('admin/applications');
			return;
		}
		$application = $application[0];
		if (!empty($application['address']))
			$address_parts[] = $application['address'];
		if (!empty($application['district']))
			$address_parts[] = $application['district'];
		if (!empty($application['state']))
			$address_parts[] = $application['state'];
		if (!empty($application['city']))
			$address_parts[] = $application['city'];
		if (!empty($application['pincode']))
			$address_parts[] = $application['pincode'];
		$application['address'] = implode(', ', $address_parts);
		// $this->load->view('template/template', ['application' => $application]);
		// die();
		//$this->load->view('template/template', ['application' => $application]);
		$options = new Options();
		$options->set('isHtml5ParserEnabled', true);
		$options->set('isRemoteEnabled', true);
		$options->set('isPhpEnabled', true);
		$options->set('isFontSubsettingEnabled', true);
		$options->set('isJavascriptEnabled', true);

		// IMPORTANT: Ensure background graphics render
		$options->set('isCssFloatEnabled', true);

		$dompdf = new Dompdf($options);

		// Load HTML from external file
		$html = $this->load->view('temp/approval_letter', ['application' => $application], true);
		$dompdf->loadHtml($html);

		// Set paper size and orientation
		$dompdf->setPaper('A4', 'portrait');

		// Render PDF
		$dompdf->render();

		// Stream PDF to browser with download option
		$dompdf->stream("approval_letter.pdf", ["Attachment" => false]);


	}

	// function pdf()
	// {
	// 	$application = $this->admin_model->get_data('application', '*', ['id' => 613]);
	// 	if (empty($application)) {
	// 		$this->session->set_flashdata('errormsg', 'Application not found.');
	// 		redirect('admin/applications');
	// 		return;
	// 	}
	// 	$application = $application[0];
	// 	if (!empty($application['address'])) $address_parts[] = $application['address'];
	// 	if (!empty($application['district'])) $address_parts[] = $application['district'];
	// 	if (!empty($application['state'])) $address_parts[] = $application['state'];
	// 	if (!empty($application['city'])) $address_parts[] = $application['city'];
	// 	if (!empty($application['pincode'])) $address_parts[] = $application['pincode'];
	// 	$application['address'] = implode(', ', $address_parts);
	// 	$this->load->view('temp/approval_letter', ['application' => $application]);
	// }


	function charge_application($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['application'] = $this->admin_model->get_data('application', '*', ['id' => $id, 'role' => 'customer']);
			if (!empty($data['application'])) {
				$data['application'] = $data['application'][0];
				$data['payments'] = $this->admin_model->get_data('payment', '*', ['userid' => $id]);
				$data['application']['status'] = $data['application']['loan_appr_status'] == 1 ? 'Approved' : 'Pending';
				$this->load->view('site/db_header', $data);
				$this->load->view('admin/charge_application', $data);
				$this->load->view('site/db_footer');
			} else {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('admin/applications');
			}

		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function add_payment()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {

			$id = $this->input->post('id');
			$userid = $this->input->post('application_id');
			$type = $this->input->post('type');
			$amount = $this->input->post('amount');
			$status = $this->input->post('status');

			if (empty($userid) || empty($type) || empty($amount) || !isset($status)) {
				$this->session->set_flashdata('errormsg', 'All fields are required.');
				redirect('admin/charge_application/' . $userid);
				return;
			}

			$payment_data = [
				'orderid' => 'ORD' . strtoupper($this->generateSecureTransactionRef(12)),
				'userid' => $userid,
				'type' => $type,
				'amount' => $amount,
				'status' => $status
			];
			if ($id) {
				$payment_data['modified_at'] = date('Y-m-d H:i:s');
			} else {
				$payment_data['created_at'] = date('Y-m-d H:i:s');
			}

			if ($id) {
				$this->admin_model->update_data('payment', $payment_data, ['id' => $id]);
				$this->session->set_flashdata('successmsg', 'Payment record updated successfully.');
			} else {
				$this->admin_model->insert_entry('payment', $payment_data);
				$this->session->set_flashdata('successmsg', 'Payment record added successfully.');
			}

			redirect('admin/charge_application/' . $userid);
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function invoice()
	{
		$invoiceId = $this->input->get('id');
		$userid = $this->input->get('userid');
		$data['payments'] = $this->admin_model->get_data('payment', '*', ['id' => $invoiceId, 'userid' => $userid]);
		$data['userDetails'] = $this->admin_model->get_data('application', 'id, name, email, mobile, app_id, address', ['id' => $userid])[0];
		//$this->load->view('invoice', $data);
		$this->load->view('new_invoice', $data);
	}


	public function bank()
	{

		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['bankDetails'] = $this->admin_model->get_data('bankdetails', 'id, bank_name, beneficiary_name, account_no, ifsc_code, bank_branch')[0];
			$this->load->view('site/db_header');
			$this->load->view('admin/bank', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin/index');
		}
	}
	public function bankEdit()
	{
		$session_data = $this->session->userdata('session_data');
		if (!empty($session_data) && $session_data['role'] == 'admin') {
			$bankid = $this->input->get('bankid');
			$data['bankDetails'] = $this->admin_model->get_data('bankdetails', 'id, bank_name, beneficiary_name, account_no, ifsc_code, bank_branch', ['id' => $bankid])[0];
			$this->load->view('site/header');
			$this->load->view('admin/edit_bank', $data);
			$this->load->view('site/datatablefooter');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin/index');
		}
	}

	public function bankUpdate()
	{

		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data_array = [];
			$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
			$this->form_validation->set_rules('beneficiary_name', 'Beneficiary Name', 'required');
			$this->form_validation->set_rules('account_no', 'Account No', 'required');
			$this->form_validation->set_rules('ifsc_code', 'Ifsc Code', 'required');
			$this->form_validation->set_rules('bank_branch', 'bank_branch Name', 'required');
			$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->bank();
			} else {
				$data_array = [
					'bank_name' => $this->input->post('bank_name'),
					'beneficiary_name' => $this->input->post('beneficiary_name'),
					'account_no' => $this->input->post('account_no'),
					'ifsc_code' => $this->input->post('ifsc_code'),
					'bank_branch' => $this->input->post('bank_branch'),
					'created_at' => date("Y-m-d h:i:s"),
				];
				$bankid = $this->input->post('bankid');
				if (!empty($bankid && $data_array)) { //update bank details
					$this->admin_model->update_data('bankdetails', $data_array, ['id' => $bankid]);
					$this->session->set_flashdata('successmsg', 'Bank update Successfully !!!');
				} else if (!empty($data_array)) { //insert bank details
					$this->admin_model->insert_entry('bankdetails', $data_array);
					$this->session->set_flashdata('successmsg', 'Bank add Successfully !!!');
				} else {
					$this->session->set_flashdata('errormsg', 'Somethins wrongs !!!');
				}
				redirect('admin/bank');
			}
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin/index');
		}
	}
	public function contact_form()
	{
		$this->load->view('site/db_header');
		$this->load->view('admin/contact_form');
		$this->load->view('site/db_footer');
	}

	function book_an_appointment()
	{
		$this->load->view('site/db_header');
		$this->load->view('admin/book_an_appointment');
		$this->load->view('site/db_footer');
	}

	function apply_now_form()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['approvals'] = $this->admin_model->get_data('inquiry', '*');
			$this->load->view('site/db_header');
			$this->load->view('admin/book_an_appointment', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function approval()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {

			$data['approvals'] = $this->admin_model->get_data('application', '*', ['role' => 'customer'], [], ['id' => 'DESC']);

			$this->load->view('site/db_header');
			$this->load->view('admin/approval', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {

			$this->load->view('site/db_header');
			$this->load->view('admin/message');
			$this->load->view('site/db_footer');
		}
	}

	function show_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['messages'] = $this->admin_model->get_data('message', '*', []);
			$this->load->view('site/db_header');
			$this->load->view('admin/show_message', $data);
			$this->load->view('site/db_footer');
		}
	}

	function setting()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['application'] = $this->admin_model->get_data('application', '*', ['id' => $this->session->userdata('userid')]);
			if (!empty($data['application'])) {
				$data['application'] = $data['application'][0];
				$this->load->view('site/db_header');
				$this->load->view('admin/setting', $data);
				$this->load->view('site/db_footer');
			}
		}
	}

	function save_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$id = $this->input->post('id');
			if (empty($title) || empty($description)) {
				$this->session->set_flashdata('errormsg', 'All fields are required.');
				redirect('admin/message');
				return;
			}

			$message_data = [
				'title' => $title,
				'description' => $description,
				'created_at' => date('Y-m-d H:i:s')
			];
			if ($id) {
				$message_data['modified_at'] = date('Y-m-d H:i:s');
				$this->admin_model->update_data('message', $message_data, ['id' => $id]);
				$this->session->set_flashdata('successmsg', 'Message updated successfully.');
				redirect('admin/edit_message?id=' . $id);
			}
			$this->admin_model->insert_entry('message', $message_data);
			$this->session->set_flashdata('successmsg', 'Message added successfully.');
			redirect('admin/message');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function edit_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$id = $this->input->get('id');
			if (empty($id)) {
				$this->session->set_flashdata('errormsg', 'Message ID is required.');
				redirect('admin/show_message');
				return;
			}
			$data['message'] = $this->admin_model->get_data('message', '*', ['id' => $id]);
			if (!empty($data['message'])) {
				$data['message'] = $data['message'][0];
				$this->load->view('site/db_header');
				$this->load->view('admin/message', $data);
				$this->load->view('site/db_footer');
			} else {
				$this->session->set_flashdata('errormsg', 'Message not found.');
				redirect('admin/show_message');
			}

		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function delete_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$id = $this->input->get('id');
			if (empty($id)) {
				$this->session->set_flashdata('errormsg', 'Message ID is required.');
				redirect('admin/show_message');
				return;
			}
			$this->admin_model->delete_data('message', ['id' => $id]);
			$this->session->set_flashdata('successmsg', 'Message deleted successfully.');
			redirect('admin/show_message');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function create_approval()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {

			$this->load->view('site/db_header');
			$this->load->view('admin/approval_form');
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	public function update_application()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$id = $this->input->post('id');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			if ($this->form_validation->run() == FALSE) {
				$this->edit_application($id);
			} else {

				$application = $this->admin_model->get_data('application', '*', ['id' => $id]);
				if (!empty($application)) {
					$application = $application[0];
				}

				$data_array = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'mobile' => $this->input->post('mobile'),
					'whatsapp' => $this->input->post('whatsapp'),
					'aadhar' => $this->input->post('aadhaar'),
					'pancard' => $this->input->post('pancard'),
					'pincode' => $this->input->post('pin_code'),
					'district' => $this->input->post('district'),
					'state' => $this->input->post('state'),
					'address' => $this->input->post('address'),
					'franchise_type' => $this->input->post('franchise_type'),
					'father_name' => $this->input->post('father_name'),
					'updated_at' => date('Y-m-d H:i:s')
				];

				$updated_array = [];
				foreach ($data_array as $key => $value) {
					if ($application[$key] != $value) {
						$updated_array[$key] = $value;
					}
				}
				if (!empty($updated_array)) {
					$this->admin_model->update_data('application', $updated_array, ['id' => $id]);
					$this->session->set_flashdata('successmsg', 'Application updated successfully!');
				} else {
					$this->session->set_flashdata('errormsg', 'No data to update!');
				}
				redirect('admin/edit_approval/' . $id);
			}
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}
	function save_approval()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[application.mobile]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('franchise_type', 'Franchise Type', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->create_approval();
		} else {
			$approval_id = $this->input->post('id');
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'mobile' => trim($this->input->post('mobile')),
				'pincode' => $this->input->post('pin_code'),
				'city' => $this->input->post('city'),
				'district' => $this->input->post('district'),
				'state' => $this->input->post('state'),
				'address' => $this->input->post('address'),
				'franchise_type' => $this->input->post('franchise_type'),
				'father_name' => $this->input->post('father_name'),
				'created_at' => date('Y-m-d H:i:s'),
				'role' => 'customer',
				'app_id' => 'VL/' . date('Y') . '/' . date('m') . '/' . rand(1000, 9999) . '/' . $this->generateUniqueCapitalString(5, $this->admin_model->get_column_values('application', 'app_id'))
			];


			if (!empty($_FILES['image']['name'])) {
				$config['upload_path'] = './uploads';
				$config['allowed_types'] = 'jpg|jpeg|png|pdf';
				$config['max_size'] = 2048; // 2 MB limit
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$uploadData = $this->upload->data();
					$data['profile_image'] = $uploadData['file_name'];
				} else {
					$this->session->set_flashdata('errormsg', $this->upload->display_errors());
					redirect('admin/create_approval');
				}
			}

			if ($approval_id) {
				$data['updated_at'] = date('Y-m-d H:i:s');
				$this->admin_model->update_data('application', $data, ['id' => $approval_id]);
				$this->session->set_flashdata('successmsg', 'Approval updated successfully.');
				redirect('admin/edit_approval/' . $approval_id);
			}

			$this->admin_model->insert_entry('application', $data);
			$this->session->set_flashdata('successmsg', 'Approval created successfully.');
			redirect('admin/approval');
		}
	}

	function update_settings()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$password = $this->input->post('password');
		if ($this->form_validation->run() == FALSE) {
			$this->setting();
		} else {
			$data_array = [
				'name' => $this->input->post('name'),
				'mobile' => $this->input->post('mobile'),
				'username' => $this->input->post('username'),
			];
			if (!empty($password)) {
				$data_array['password'] = md5($password);
			}
			$userid = $this->session->userdata('userid');
			if (!empty($userid && $data_array)) { //update user details
				$this->admin_model->update_data('application', $data_array, ['id' => $userid]);
				$this->session->set_flashdata('successmsg', 'Settings updated Successfully !!!');
				// Update session data
				$this->session->set_userdata(array_intersect_key($data_array, array_flip(['name', 'email', 'mobile'])));
			} else {
				$this->session->set_flashdata('errormsg', 'Somethins wrongs !!!');
			}
			redirect('admin/setting');
		}

	}
	function generateUniqueCapitalString($length = 5, $existing_strings = [])
	{
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';

		do {
			$randomString = ''; // Reset for each attempt
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[random_int(0, $charactersLength - 1)];
			}
		} while (in_array($randomString, $existing_strings)); // Check for uniqueness

		return $randomString;
	}
	function delete_application($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$this->admin_model->delete_data('inquiry', ['id' => $id]);
			$this->session->set_flashdata('successmsg', 'Application deleted successfully.');
			redirect('admin/apply_now_form');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function delete_messages($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$this->admin_model->delete_data('message', ['id' => $id]);
			$this->session->set_flashdata('successmsg', 'Message deleted successfully.');
			redirect('admin/show_message');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function message_admin()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$id = $this->input->get('id');
			if (empty($id)) {
				$this->session->set_flashdata('errormsg', 'Message ID is required.');
				redirect('admin/show_message');
				return;
			}
			$data['messages'] = $this->admin_model->custom_query("SELECT um.*, m.title FROM user_message um LEFT JOIN message m ON um.title = m.id WHERE um.user_id = $id ORDER BY um.created_at DESC");
			$data['user_id'] = $id;
			$this->load->view('site/db_header');
			$this->load->view('admin/message_admin', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function create_adminmessage()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {

			$this->load->view('site/db_header');
			$this->load->view('admin/create_adminmessage');
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function save_application_message($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$message_id = $this->input->post('message_id');
			if (empty($title) || empty($description)) {
				$this->session->set_flashdata('errormsg', 'Title and Description are required.');
				redirect('admin/create_adminmessage');
				return;
			}

			$message_data = [
				'user_id' => $id,
				'title' => $title,
				'description' => $description,
				'created_at' => date('Y-m-d H:i:s')
			];
			if ($message_id) {

				$message_data['modified_at'] = date('Y-m-d H:i:s');
				$this->admin_model->update_data('user_message', $message_data, ['id' => $message_id, 'user_id' => $id]);
				$this->session->set_flashdata('successmsg', 'Message updated successfully.');
				redirect('admin/edit_application_message/' . $message_id . '/' . $id);

			}

			$this->admin_model->insert_entry('user_message', $message_data);
			$this->session->set_flashdata('successmsg', 'Message sent successfully.');
			redirect('admin/message_admin?id=' . $id);
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function delete_application_message($id, $user_id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$this->admin_model->delete_data('user_message', ['id' => $id]);
			$this->session->set_flashdata('successmsg', 'Message deleted successfully.');
			redirect('admin/message_admin?id=' . $user_id);
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function inactive_adminmessage()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$message_id = $this->input->post('message_id');
			$status = $this->input->post('status');
			if (empty($message_id)) {
				echo json_encode(['status' => 'error', 'message' => 'Message ID is required.']);
				return;
			}
			$status = $status == '1' ? '0' : '1';
			$this->admin_model->update_data('user_message', ['status' => $status], ['id' => $message_id]);
			echo json_encode(['status' => 'success', 'message' => 'Message status updated successfully.']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Not able to access first login.']);
		}
	}

	function edit_application_message($id, $user_id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['message'] = $this->admin_model->get_data('user_message', '*', ['id' => $id]);
			if (!empty($data['message'])) {
				$data['message'] = $data['message'][0];
				$data['messages'] = $this->admin_model->get_data('message', '*', []);
				$data['user_id'] = $user_id;
				$this->load->view('site/db_header');
				$this->load->view('admin/application_message_form', $data);
				$this->load->view('site/db_footer');
			} else {
				$this->session->set_flashdata('errormsg', 'Message not found.');
				redirect('admin/message_admin?id=' . $user_id);
			}

		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function application_message_form($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['user_id'] = $id;
			$data['messages'] = $this->admin_model->get_data('message', '*', []);
			$this->load->view('site/db_header');
			$this->load->view('admin/application_message_form', $data);
			$this->load->view('site/db_footer');
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function fetch_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$message_id = $this->input->post('message_id');
			if (empty($message_id)) {
				echo json_encode(['status' => 'error', 'data' => []]);
				return;
			}
			// Fetch message data
			$messages = $this->admin_model->get_data('message', '*', ['id' => $message_id]);
			if (!empty($messages)) {
				$messages = $messages[0];
				echo json_encode(['status' => 'success', 'data' => $messages['description']]);
			} else {
				echo json_encode(['status' => 'error', 'data' => []]);
			}
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}

	function active_user_message()
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$message_id = $this->input->post('user_id');
			$status = $this->input->post('status');
			if (empty($message_id)) {
				echo json_encode(['status' => 'error', 'message' => 'Message ID is required.']);
				return;
			}
			$status = $status == '1' ? '0' : '1';
			$this->admin_model->update_data('application', ['status' => $status], ['id' => $message_id]);
			echo json_encode(['status' => 'success', 'message' => 'Application status updated successfully.']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Not able to access first login.']);
		}
	}

	function edit_approval($id)
	{
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'admin') {
			$data['approval'] = $this->admin_model->get_data('application', '*', ['id' => $id, 'role' => 'customer']);
			if (!empty($data['approval'])) {
				$data['approval'] = $data['approval'][0];
				$this->load->view('site/db_header');
				$this->load->view('admin/approval_form', $data);
				$this->load->view('site/db_footer');
			} else {
				$this->session->set_flashdata('errormsg', 'Approval not found.');
				redirect('admin/approval');
			}
		} else {
			$this->session->set_flashdata('errormsg', 'Not able to access first login.');
			redirect('admin');
		}
	}
}
