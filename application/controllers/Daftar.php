<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_daftar');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['daftarmitra'] = $this->m_daftar->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarmitra/index',$data);
        $this->load->view('templates/footer');
    }
    
}