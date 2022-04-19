<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lab_kultur_controller extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('email') == null) {
            redirect("auth");
        }

        $this->load->model('m_add_data');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

    function tambah()
    {

        $layanan = $this->input->post('layanan');
        $satuan = $this->input->post('satuan');
		$tarif = $this->input->post('tarif');
        $harga = $this->input->post('harga');
        $berat = $this->input->post('berat');
		$waktu = $this->input->post('waktu');
        $data = array(
            'layanan' =>  $layanan,
            'satuan' => $satuan,
			'berat' => $berat,
			'tarif' =>  $tarif,
            'harga' => $harga,
			'waktu' =>  $waktu,
        );
        $this->m_add_data->input_data($data, 'lab_kultur');
        redirect('admin/lab_kultur');
    }

    function edit()
    {
        $id = $this->input->post('id');
        $layanan = $this->input->post('layanan');
        $satuan = $this->input->post('satuan');
		$tarif = $this->input->post('tarif');
        $harga = $this->input->post('harga');
        $berat = $this->input->post('berat');
		$waktu = $this->input->post('waktu');
        $data = array(
            'layanan' =>  $layanan,
            'satuan' => $satuan,
			'berat' => $berat,
			'tarif' =>  $tarif,
            'harga' => $harga,
			'waktu' =>  $waktu,
        );

        $where = array(
            'id' => $id
        );
        $this->m_add_data->update_data($where, $data, 'lab_kultur');
        redirect('admin/lab_kultur');
    }
	
    function hapus($id){
		$where = array('id' => $id);
		$this->m_add_data->hapus_data($where,'lab_kultur');
		redirect('admin/lab_kultur');
	}
}