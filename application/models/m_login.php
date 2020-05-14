<?php

class M_login extends CI_Model
{
    public function cek_login($where){
        return $this->db->get_where('users',$where);
    }
    public function tampil_data(){
        
    }    
}






