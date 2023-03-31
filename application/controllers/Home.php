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
        $data['prog_sampah'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 1;")->row();
        $data['prog_administrasi'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 2")->row();
        $data['prog_pembangunan'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 3")->row();
        $data['prog_drainase'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 4")->row();
        $data['prog_sosial'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 5")->row();
        $data['prog_pelayanan'] = $this->db->query("SELECT (SUM(progress_kegiatan.jumlah) / SUM(target_kegiatan.jumlah)) * 100 AS percentage FROM target_kegiatan LEFT JOIN progress_kegiatan ON target_kegiatan.idTarget = progress_kegiatan.idTarget WHERE target_kegiatan.idKhidmat = 6")->row();
		$data['realisasi'] = $this->db->query("SELECT opd.nama, SUM(target_kegiatan.budget) AS total_dana, COALESCE(SUM(progress.dana), 0) AS terealisasi, opd.logo, ROUND((COALESCE(SUM(progress.dana), 0) / SUM(target_kegiatan.budget) * 100), 2) AS percentage FROM opd INNER JOIN target_kegiatan ON opd.idOpd = target_kegiatan.idOpd LEFT JOIN ( SELECT idTarget, SUM(dana) AS dana FROM progress_kegiatan GROUP BY idTarget ) AS progress ON target_kegiatan.idTarget = progress.idTarget GROUP BY opd.nama, opd.logo;")->result();
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
