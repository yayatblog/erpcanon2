<?php

class M_daftar extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('daftarmitra')->result_array();
    }
    public function tambahDataMitra(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "kategori" => $this->input->post('kategori',true),
            "lead" => $this->input->post('lead',true)
        ];
        $this->db->insert('daftarmitra',$data);
    }
}
