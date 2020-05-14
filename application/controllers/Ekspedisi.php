<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_ekspedisi');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Ekspedisi';
        $data['daftarekspedisi'] = $this->m_ekspedisi->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('daftarekspedisi/index',$data);
        $this->load->view('templates/footer');
    }
}