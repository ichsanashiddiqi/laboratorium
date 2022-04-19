<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('email') == null) {
            redirect("auth");
        }

		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('m_view_tabel');
	}
	public function index()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/admin.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function lab_benih()
	{
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_benih'] = $this->m_view_tabel->v_lab_benih()->result();
			
        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/lab_benih.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function edit_lab_benih($id)
	{
			$where = array('benihID' => $id);
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_benih'] = $this->m_view_tabel->v_lab_benih()->result();
			$data['lab_benih'] = $this->m_view_tabel->edit_data($where,'lab_benih')->result_array();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/edit_lab_benih.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function lab_kultur()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_kultur'] = $this->m_view_tabel->v_lab_kultur()->result();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/lab_kultur.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function edit_lab_kultur($id)
	{
			$where = array('id' => $id);
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_kultur'] = $this->m_view_tabel->v_lab_kultur()->result();
			$data['lab_kultur'] = $this->m_view_tabel->edit_data($where,'lab_kultur')->result_array();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/edit_lab_kultur.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function lab_molekuler()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_molekuler'] = $this->m_view_tabel->v_lab_molekuler()->result();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/lab_molekuler.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function edit_lab_molekuler($id)
	{
			$where = array('id' => $id);
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_molekuler'] = $this->m_view_tabel->v_lab_molekuler()->result();
			$data['lab_molekuler'] = $this->m_view_tabel->edit_data($where,'lab_molekuler')->result_array();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/edit_lab_molekuler.php', $data);
			$this->load->view('templates/footer.php', $data);
	}
	public function lab_tanah()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_tanah'] = $this->m_view_tabel->v_lab_tanah()->result();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/lab_tanah.php', $data);
			$this->load->view('templates/footer.php', $data);
	}
	public function edit_lab_tanah($id)
	{
			$where = array('id' => $id);
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_tanah'] = $this->m_view_tabel->v_lab_tanah()->result();
			$data['lab_tanah'] = $this->m_view_tabel->edit_data($where,'lab_tanah')->result_array();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/edit_lab_tanah.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function lab_opt()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_opt'] = $this->m_view_tabel->v_lab_opt()->result();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/lab_opt.php', $data);
			$this->load->view('templates/footer.php', $data);
	}
	public function edit_lab_opt($id)
	{
			$where = array('id' => $id);
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$data['dat_lab_opt'] = $this->m_view_tabel->v_lab_opt()->result();
			$data['lab_opt'] = $this->m_view_tabel->edit_data($where,'lab_opt')->result_array();

        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/edit_lab_opt.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

	public function registration()
	{

			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        	$this->load->view('templates/sidebar.php', $data);
			$this->load->view('templates/topbar.php', $data);
			$this->load->view('templates/header.php', $data);
			$this->load->view('admin/registration.php', $data);
			$this->load->view('templates/footer.php', $data);
	}

}