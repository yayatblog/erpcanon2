<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }
    public function index(){
        $topik['judul'] = 'Halaman Menu Login';
        $this->load->view('login',$topik);
    }
    public function login_aksi(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);

        //Rule validasi
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() != FALSE) {
            $where = array(
                'username'=>$username,
                'password'=>$password,
            );
            $cekLogin = $this->m_login->cek_login($where)->num_rows();

            if ($cekLogin>0) {
                $sess_data = array(
                    'username'=>$username,
                    'login'=>'OK'
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('dashboard'));
            }else {
                redirect(base_url('login'));
            }
        }else {
            $this->load->view('login');
        }
    }
    public function logout(){
        $this->session->session_destroy();
        redirect('login');
    }
}