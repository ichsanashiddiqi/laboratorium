<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_view_tabel');
	
	}

	public function index()
	{
		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/landing_page.php');
		$this->load->view('templates/footer_landing.php');
	}
	public function lab_benih()
	{
		$data['dat_lab_benih'] = $this->m_view_tabel->v_lab_benih()->result();

		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/lab_benih.php', $data);
		$this->load->view('templates/footer_landing.php');
	}
	public function lab_kultur()
	{
		$data['dat_lab_kultur'] = $this->m_view_tabel->v_lab_kultur()->result();

		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/lab_kultur.php', $data);
		$this->load->view('templates/footer_landing.php');
	}
	public function lab_molekuler()
	{
		$data['dat_lab_molekuler'] = $this->m_view_tabel->v_lab_molekuler()->result();

		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/lab_molekuler.php', $data);
		$this->load->view('templates/footer_landing.php');
	}
	public function lab_opt()
	{
		$data['dat_lab_opt'] = $this->m_view_tabel->v_lab_opt()->result();

		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/lab_opt.php', $data);
		$this->load->view('templates/footer_landing.php');
	}
	public function lab_tanah()
	{
		$data['dat_lab_tanah'] = $this->m_view_tabel->v_lab_tanah()->result();

		$this->load->view('templates/header_landing.php');
		$this->load->view('landing_page/lab_tanah.php', $data);
		$this->load->view('templates/footer_landing.php');
	}

	public function operasi_benih()
	{
		$data['bilangan1'] = $this->input->post('bilangan1');
		$data['bilangan2'] = $this->input->post('bilangan2');
		$data['hasil'] = $this->m_view_tabel->hitung($data['bilangan1'],$data['bilangan2']);
		redirect('landing_controller/lab_benih');
	}
}