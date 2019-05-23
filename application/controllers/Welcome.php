<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent:: __construct();
//		$this->load->model('UserTable');
//		$this->load->model('ContrasenaNueva');
	}

	public function index()
	{
		if ($this->session->userdata('name')) {
	      $this->session->sess_destroy();
	    }
		$this->load->view('login');
	}
}
