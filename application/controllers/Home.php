<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}
	public function index()
	{

		// $mpdf = new \Mpdf\Mpdf();
		// $html = $this->load->view('welcome_message',[],true);
		// $mpdf->WriteHTML($html);
		// $mpdf->Output();
		$this->load->view('site/ft_header');
		$this->load->view('home/index');
		$this->load->view('site/ft_footer');
	}
	function loan_calculator(){
		$this->load->view('site/ft_header');
		$this->load->view('home/loan_calculator');
		$this->load->view('site/ft_footer');
	}
	public function apply_now()
	{

		$this->load->view('site/ft_header');
		$this->load->view('home/apply');
		$this->load->view('site/ft_footer');
	}

	public function about()
	{
		// Load the about us view
		$this->load->view('site/ft_header');
		$this->load->view('home/about_us');
		$this->load->view('site/ft_footer');
	}

	public function contact()
	{
		// Load the contact us view
		$this->load->view('site/ft_header');
		$this->load->view('home/contact_us');
		$this->load->view('site/ft_footer');
	}

	public function status()
	{
		// Load the status view
		$this->load->view('site/ft_header');
		$this->load->view('home/status');
		$this->load->view('site/ft_footer');
	}

	public function services()
	{
		// Load the services view
		$this->load->view('site/ft_header');
		$this->load->view('home/services');
		$this->load->view('site/ft_footer');
	}

	function business_loan(){
		$this->load->view('site/ft_header');
		$this->load->view('home/business_loan');
		$this->load->view('site/ft_footer');
	}

		function commercial_loans(){
		$this->load->view('site/ft_header');
		$this->load->view('home/commercial_loans');
		$this->load->view('site/ft_footer');
	}

	function personal_loan(){
		$this->load->view('site/ft_header');
		$this->load->view('home/personal_loan');
		$this->load->view('site/ft_footer');
	}

	function education_loan(){
		$this->load->view('site/ft_header');
		$this->load->view('home/education_loan');
		$this->load->view('site/ft_footer');
	}

	function car_loan(){
		$this->load->view('site/ft_header');
		$this->load->view('home/car_loan');
		$this->load->view('site/ft_footer');
	}



	public function submit_franchise_application()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_unique[application.mobile]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('franchise_type', 'Franchise Type', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();

			if ($this->input->is_ajax_request()) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(['status' => 'error', 'errors' => $errors]));
				return;
			}

			$this->session->set_flashdata('errormsg', validation_errors());
			redirect('home/apply_now');
			return;
		}

		$data_array = [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'pincode' => $this->input->post('pincode'),
			'city' => $this->input->post('city'),
			'district' => $this->input->post('district'),
			'state' => $this->input->post('state'),
			'address' => $this->input->post('address'),
			'franchise_type' => $this->input->post('franchise_type'),
			'created_at' => date('Y-m-d H:i:s'),
			'role' => 'customer',
			'app_id' => 'VL/' . date('Y') . '/' . date('m') . '/'. rand(1000, 9999) . '/' . $this->generateUniqueCapitalString(5, $this->admin_model->get_column_values('application', 'app_id'))
		];
		$inserted = $this->admin_model->insert_entry('application', $data_array);

		if ($inserted) {
			$msg = 'Application registered successfully.';
			if ($this->input->is_ajax_request()) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(['status' => 'success', 'message' => $msg]));
				return;
			}
			$this->session->set_flashdata('successmsg', $msg);
		} else {
			if ($this->input->is_ajax_request()) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode(['status' => 'error', 'message' => 'Unable to submit at this time.']));
				return;
			}
			$this->session->set_flashdata('errormsg', 'Something went wrong, please try again later.');
		}

		redirect('home/apply_now');
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

	public function welcome()
	{
		// Load the welcome view
		$app_id = $this->input->post('app_id');
		$mobile = $this->input->post('mobile');
		$data = [];

		if ($app_id && $mobile) {
			$data['application'] = $this->admin_model->get_data(
				'application',
				'*',
				[
					'app_id' => $app_id,
					'mobile' => $mobile,
				]
			);

			if (!empty($data['application'])) {
				$userData = $data['application'][0];
				$session_data = [
					'role' => $userData['role'],
					'userid' => $userData['id'],
					'fname' => $userData['name'],
					'email' => $userData['email'],
					'mobile' => $userData['mobile'],
					'app_id' => $userData['app_id']
				];

				$this->session->set_userdata($session_data);
				$msg = 'Welcome ' . ucfirst($userData['name']);
				$this->session->set_flashdata('successmsg', $msg);
				redirect('home/dashboard');
			} else {
				$this->session->set_flashdata('errormsg', 'Check your correctly login details or contact to admin.');
				redirect('home/status');
			}
		} else {
			$this->session->set_flashdata('errormsg', 'Please enter your approval number and mobile number.');
			redirect('home/status');
		}
	}


	function test()
	{
		$application = $this->admin_model->get_data('application', '*', ['id' => 613]);
		if (empty($application)) {
			$this->session->set_flashdata('errormsg', 'Application not found.');
			redirect('admin/applications');
			return;
		}
		$application = $application[0];
		$template = "Hi Team,
					I am applying for a Education Loan
					Please find attached detailes
					Name: {$application['name']}
					Mobile: {$application['mobile']}
					Email: {$application['email']}
					Aadhar: {$application['aadhar']}
					Pancard: {$application['pancard']}
					Address: {$application['address']}
					Bank Name: {$application['bank_name']}
					Account Number: {$application['bank_account']}
					IFSC : {$application['bank_ifsc']}
					Loan Amount: {$application['loan_amount']}
					Tenure : {$application['period']}
					Regards
				";

		$whatsapp_number = '918420581127'; // Replace with the target WhatsApp number (countrycode+number, no +)
		$message = urlencode($template);
		$whatsapp_url = "https://wa.me/{$whatsapp_number}?text={$message}";
		redirect($whatsapp_url);
	}


	function dashboard()
	{
		// Function logic here
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'customer') {
			$userId = $this->session->userdata('userid');
			$application = $this->admin_model->get_data('application', '*', ['id' => $userId]);
			if (empty($application)) {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('home/status');
				return;
			}
			$data['application'] = $application[0];
			$data['messages'] = $this->admin_model->custom_query("SELECT um.*, m.title FROM user_message um LEFT JOIN message m ON um.title = m.id WHERE um.user_id = $userId");
			$this->load->view('user/dashboard', $data);
		} else {
			$this->session->set_flashdata('errormsg', 'Please login to access dashboard.');
			redirect('home/status');
		}
	}
	function transactions()
	{
		// Function logic here

		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'customer') {
			$userId = $this->session->userdata('userid');
			$application = $this->admin_model->get_data('application', '*', ['id' => $userId]);
			if (empty($application)) {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('home/login');
				return;
			}
			$data['payments'] = $this->admin_model->get_data('payment', '*', ['userid' => $userId]);
			$data['application'] = $application[0];
			$this->load->view('site/user_header');
			$this->load->view('user/transactions', $data);
			$this->load->view('site/user_footer', $data);
		}
	}
	function userLogin()
	{
		$mobile = $this->input->post('mobile');
		if (!empty($mobile)) {
			$where = ['mobile' => $mobile, 'status' => '1', 'role' => 'customer'];
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
				redirect('home/dashboard');
			} else {
				$this->session->set_flashdata('errormsg', 'Invalid Mobile Number or User not approved by admin');
				redirect('home/login');
			}
		} else {
			$this->session->set_flashdata('errormsg', 'All Field are required');
			redirect('home/login');
		}
	}

	public function logout()
	{
		$this->session->set_flashdata('successmsg', 'Successfully Logout');
		$this->session->sess_destroy();
		redirect("home/status");
	}

	function helpcenter()
	{
		// Function logic here

		$this->load->view('site/user_header');
		$this->load->view('user/help-center');
		$this->load->view('site/user_footer');
	}

	function setting()
	{
		// Function logic here
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'customer') {
			$userId = $this->session->userdata('userid');
			$application = $this->admin_model->get_data('application', '*', ['id' => $userId]);
			if (empty($application)) {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('home/login');
				return;
			}
			$data['payments'] = $this->admin_model->get_data('payment', '*', ['userid' => $userId]);
			$data['application'] = $application[0];
			$this->load->view('site/user_header');
			$this->load->view('user/setting', $data);
			$this->load->view('site/user_footer', $data);
		}
	}
	function profile()
	{
		// Function logic here
		if (!empty($this->session->userdata('role')) && $this->session->userdata('role') == 'customer') {
			$userId = $this->session->userdata('userid');
			$application = $this->admin_model->get_data('application', '*', ['id' => $userId]);
			if (empty($application)) {
				$this->session->set_flashdata('errormsg', 'Application not found.');
				redirect('home/login');
				return;
			}
			$data['payments'] = $this->admin_model->get_data('payment', '*', ['userid' => $userId]);
			$data['application'] = $application[0];
			$address_parts = [];
			if (!empty($data['application']['address']))
				$address_parts[] = $data['application']['address'];
			if (!empty($data['application']['district']))
				$address_parts[] = $data['application']['district'];
			if (!empty($data['application']['state']))
				$address_parts[] = $data['application']['state'];
			if (!empty($data['application']['city']))
				$address_parts[] = $data['application']['city'];
			if (!empty($data['application']['pincode']))
				$address_parts[] = $data['application']['pincode'];
			$data['application']['address'] = implode(', ', $address_parts);
			$this->load->view('site/user_header');
			$this->load->view('user/profile', $data);
			$this->load->view('site/user_footer', $data);
		}
	}
}
