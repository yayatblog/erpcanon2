<?php

class M_kategori extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tbl_category')->result_array();
    }
    
}