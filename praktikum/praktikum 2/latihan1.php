<?php 
class latihan1 extends CI_Controller
{
	
	public function index()
	{
		echo "Welcome to class programming";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model("model1"); // pemanggilan class model
		$hasil = $this->model1->jumlah($n1, $n2); // hasil di ambil dari class model
		echo "Hasil Penjumlahan dari".$n1."+".$n2."=".$hasil; // mencetak hasil penjumlahan

		// pemanggilan di laman ci_hadi/index.php/latihan1/penjumlahan/5/10
	}
}
 ?>