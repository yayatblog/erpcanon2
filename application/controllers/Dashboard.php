<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
        $topik['judul'] = 'Halaman Dashboard';
		$this->load->view('templates/header',$topik);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
	}
}
