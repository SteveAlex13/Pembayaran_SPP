<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
		$this->load->model('Siswa_m');
		$this->load->model('Wali_m');
		$this->load->model('User_m');
		$this->load->model('Transaksi_m');
		cekSession();
	}
	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->Auth_m->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
		$data['total_user'] = $this->User_m->count();
		$data['total_siswa'] = $this->Siswa_m->count();
		$data['total_transaksi'] = $this->Transaksi_m->count();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('layout/footer');
	}

}