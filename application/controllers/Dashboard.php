<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		// $this->load->librar(array('session','email'));
		// $this->load->helper(array('captha'));
		// pengiriman parameter ke "View"
		// 1. dengan variabel
		// $data["nama"] = "udin";
		// $data["kelas"] = "if 20 dx";

		// 2. dengan arrow function (array)
		$data = array(
			"nama" => "Yoga Pratama",
			"kelas" => "if 20 dx",
			"jurusan" => "Informatika",
			"telepon" => "090998987766",
			"kelamin" => "laki-laki"
		);
		$this->load->view('dashboard_vw', $data);
	}

	function kirim_konstan()
	{
		$this->load->view("dashboard2_vw");
	}
}
