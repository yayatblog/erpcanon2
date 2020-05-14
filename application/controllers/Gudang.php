<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_gudang');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Gudang';
        $data['gudang'] = $this->m_gudang->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('gudang/index',$data);
        $this->load->view('templates/footer');
    }
}