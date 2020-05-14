<?php

class M_gudang extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('gudang')->result_array();
    }
    public function tambahDataGudang(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "lokasi" => $this->input->post('lokasi',true),
            "alamat" => $this->input->post('alamat',true)
        ];
        $this->db->insert('gudang',$data);
    }
}
