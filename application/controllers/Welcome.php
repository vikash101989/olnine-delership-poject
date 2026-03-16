<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{

		// $userid = 609;
		// $data['applicationDetails'] = $this->admin_model->get_data('application', '*', ['id' => $userid])[0];
		// $data['payment'] = $this->admin_model->get_data('payment', '*', ['userid' => $userid, 'type' => 1])[0];
		// $data['bankdetails'] = $this->admin_model->get_singledata('bankdetails', '*');
		// $data['mpay'] = $this->admin_model->get_singledata('pay', '*');
		// $this->load->view('newapprovalletter', $data, true);
		$html = $this->load->view('template/agreement', [], true);

		$mpdf = new \Mpdf\Mpdf([
			'format' => 'A4',
			'margin_left' => 15,
			'margin_right' => 15,
			'margin_top' => 16,
			'margin_bottom' => 16,
			'margin_header' => 9,
			'margin_footer' => 9
		]);
		$mpdf->WriteHTML($html);
		$temp_pdf = FCPATH . 'temp_application_.pdf';
		$mpdf->Output($temp_pdf, \Mpdf\Output\Destination::FILE);
		$this->load->helper('download');
		force_download('agreement.pdf', file_get_contents($temp_pdf));
		if (file_exists($temp_pdf)) {
			unlink($temp_pdf);
		}
		//$this->load->view('welcome_message');
	}

	public function pdf()
	{

		$html = $this->load->view('template/agreement', [], true);

		// Fix image alignment by adding CSS to center images
		$html = '<style>img { display: block; margin-left: auto; margin-right: auto; }</style>' . $html;

		$mpdf = new \Mpdf\Mpdf([
			'format' => 'A4',
			'margin_left' => 15,
			'margin_right' => 15,
			'margin_top' => 16,
			'margin_bottom' => 16,
			'margin_header' => 9,
			'margin_footer' => 9
		]);
		$mpdf->WriteHTML($html);
		$mpdf->Output('agreement.pdf', \Mpdf\Output\Destination::INLINE);
	}
	public function check()
	{
		$this->load->view('template/agreement');
	}
}
