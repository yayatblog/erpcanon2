<?php

class M_ekspedisi extends CI_Model
{
    public function tampil_data(){
        return $this->db->get('daftarekspedisi')->result_array();
    }
    public function tambahDataEkspedisi(){
        $data = [
            "nama" => $this->input->post('nama',true),
            "tipe" => $this->input->post('tipe',true)
        ];
        $this->db->insert('daftarekspedisi',$data);
    }
}
