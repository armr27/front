<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('template/header_login');
		$this->load->view('login/index');
		$this->load->view('template/footer_login');
	}

	function aksi_login(){
	$username = $this->input->post('username');
    $password = $this->input->post('password');
    $where = array(
        'username' => $username,
		'password' => md5($password)
    );

    $cek = $this->m_login->cek_login("users",$where);
	
    if($cek->num_rows() > 0){
		$cek = $cek->row();
		$data_session = array (
			'idUser' => $cek->idUser,
			'nama' => $cek->nama,
			'username' => $cek->username,
			'email' => $cek->email,
			'foto' => $cek->foto,
			'level' => $cek->level,
			'status' => $cek->status,
		);
		$this->session->set_userdata($data_session);
        redirect(base_url("home"));
    }else{
        echo "Username dan password salah !";
    }
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
