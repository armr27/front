<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opd extends CI_Controller {


	public function index()
	{
        $data['opd'] = $this->db->query("SELECT * FROM opd")->result(); 
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('opd/index', $data);
		$this->load->view('template/footer');
	}

	public function log_out()
	{
		redirect('login');
	}
}
