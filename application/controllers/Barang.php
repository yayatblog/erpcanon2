<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Karyawan';
        $data['erpcanon'] = $this->product_model->get_by_role();
        $this->load->view('templates/header',$topik);
        $this->load->view('barang/index',$data);
        $this->load->view('templates/footer');
    }
}