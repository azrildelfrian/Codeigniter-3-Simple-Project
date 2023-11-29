<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Halaman Utama',
			'content' => 'pages/landing'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
