<?php

class M_view_tabel extends CI_Model
{

    function v_lab_benih()
    {
        return $this->db->get('lab_benih');
    }

    function v_lab_kultur()
    {
        return $this->db->get('lab_kultur');
    }

    function v_lab_molekuler()
    {
        return $this->db->get('lab_molekuler');
    }

    function v_lab_opt()
    {
        return $this->db->get('lab_opt');
    }

    function v_lab_tanah()
    {
        return $this->db->get('lab_tanah');
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);

    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
     public function hitung($bilangan1,$bilangan2){
                $hasil = $bilangan1*$bilangan2;
				return $hasil;

	}
}