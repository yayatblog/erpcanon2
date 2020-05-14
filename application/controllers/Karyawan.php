<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_karyawan');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Karyawan';
        $data['karyawan'] = $this->m_karyawan->tampil_data();
        $this->load->view('templates/header',$topik);
        $this->load->view('karyawan/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul'] = 'Form Tambah Data Karyawan';

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ttl','TTL','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('lama_bekerja','Lama_bekerja','required');
        $this->form_validation->set_rules('gaji','Gaji','required');
        $this->form_validation->set_rules('tunjangan','Tunjangan','required');
        $this->form_validation->set_rules('potongan','Potongan','required');
        $this->form_validation->set_rules('cuti','Cuti','required');
        $this->form_validation->set_rules('absen','Absen','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('karyawan/tambah');
        }else {
            $this->m_karyawan->tambahDataKaryawan();
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('karyawan');
        }
        
    }
    public function detail($id){
        $topik['judul'] = 'Detail Data Karyawan';
        $data['karyawan'] = $this->m_karyawan->getKaryawanById($id);
        $this->load->view('templates/header',$topik);
        $this->load->view('karyawan/detail',$data);
    }
    public function hapus($id){
        $this->m_karyawan->hapusDataKaryawan($id);
        $this->session->set_flashdata('flash2','Dihapus');
        redirect('karyawan');
    }
    public function edit($id){
        $topik['judul'] = 'Edit Data Karyawan';
        $data['karyawan'] = $this->m_karyawan->getKaryawanById($id);
        // $data['program'] = ['Teknik Informatika','Teknik Elektro','Bahasa Indonesia','Bahasa Inggris','Matematika','PKN'];

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ttl','TTL','required');
        $this->form_validation->set_rules('jabatan','Jabatan','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('lama_bekerja','Lama_bekerja','required');
        $this->form_validation->set_rules('gaji','Gaji','required');
        $this->form_validation->set_rules('tunjangan','Tunjangan','required');
        $this->form_validation->set_rules('potongan','Potongan','required');
        $this->form_validation->set_rules('cuti','Cuti','required');
        $this->form_validation->set_rules('absen','Absen','required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header',$topik);
            $this->load->view('karyawan/edit',$data);
        }else {
            $this->m_karyawan->ubahDataKaryawan();
            $this->session->set_flashdata('flash','Diubah');
            redirect('karyawan');
        }
}
}