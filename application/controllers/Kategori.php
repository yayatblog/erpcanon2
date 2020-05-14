<?php

class Kategori extends CI_Controller
{
    public function index(){
        $topik['judul'] = 'Halaman Menu Kategori';
        $data['kategori'] = $this->m_kategori->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('kategori/index',$data);
        $this->load->view('templates/footer');
    }
}
