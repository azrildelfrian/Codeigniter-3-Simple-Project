<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Tentang Kami',
			'content' => 'pages/tentang'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
