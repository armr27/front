<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $data['prog_sampah'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 1")->row();
        $data['prog_administrasi'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 2")->row();
        $data['prog_pembangunan'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 3")->row();
        $data['prog_drainase'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 4")->row();
        $data['prog_sosial'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 5")->row();
        $data['prog_pelayanan'] = $this->db->query("SELECT CAST((SUM(a.jumlah) / SUM(b.jumlah)) * 100 AS UNSIGNED) AS percentage
                                   FROM progress_kegiatan a, target_kegiatan b WHERE b.idKhidmat = 6")->row();
		var_dump($data);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
	}

	public function log_out()
	{
		redirect('login');
	}
}
