<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_supplier');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Supplier';
        $data['supplier'] = $this->m_supplier->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('supplier/index',$data);
        $this->load->view('templates/footer');
    }
}