<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khusus extends CI_Controller {

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
        $data['user_khusus'] = $this->db->query("SELECT * FROM users")->result();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('khusus/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah_akun()
	{
        $this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('khusus/tambah_akun');
		$this->load->view('template/footer');
	}

    public function proses_tambah_khusus ()
    {
        $Username = $This->Input->Post('Username');
        $Password = $This->Input->Post('Password');
        $Nama = $This->Input->Post('Nama');
        $Base64Gambar = $_FILES["Gambar"]["Tmp_name"];
        $email = $This->Input->Post('email');
        $level = 'Khusus';
        $path = 'UploadFoto/';
        $ImagePath = $Path . $Username. "fotoProfile.Png";
        Move_uploaded_file($Base64Gambar, $ImagePath);
        $DataArr = Array(
            'Username' => $Username,
            'Password' => $Password,
            'Nama' => $Nama,
            'email' => $email,
            'level' => $level,
            'foto' => Base_url() . $ImagePath,
        );
        Echo "<Pre>";
        Print_r ($DataArr);
        Echo "</Pre>";
        $This->M_User->InsertDataUser($DataArr);
        Redirect(Base_url(), 'Refresh');
    }
}
