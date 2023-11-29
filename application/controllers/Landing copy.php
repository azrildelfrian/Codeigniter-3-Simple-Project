<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index()
	{
		#$this->load->view('landing');
		$this->load->view('section/header');
		$this->load->view('section/sidebar');
		$this->load->view('section/navbar');
		$this->load->view('pages/landing');
		$this->load->view('section/footer');
	}
}
