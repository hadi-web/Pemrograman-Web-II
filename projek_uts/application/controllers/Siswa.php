<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_siswa");
        $this->load->library('form_validation');
    }
	public function index()
	{
		$data["tbl_siswa"] = $this->Model_siswa->tampil();
		$this->load->view('user/view-siswa',$data);
	}
}
 ?>