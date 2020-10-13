<?php 
class latihan2 extends CI_Controller
{
	
	public function index()
	{
		echo "Welcome to class programming";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model("model1"); // pemanggilan class model1
		
		// melakukan perhitungan
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->model1->jumlah($n1, $n2);

		$this->load->view('view-latihan2',$data); // mencetak hasil perhitungan
	}
}
 ?>