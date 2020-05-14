<?php

class M_supplier extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('supplier')->result_array();
    }
    public function tambahDataSupplier(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "kategori" => $this->input->post('kategori',true),
            "lokasi" => $this->input->post('lokasi',true),
            "alamat" => $this->input->post('alamat',true)
        ];
        $this->db->insert('supplier',$data);
    }
}
