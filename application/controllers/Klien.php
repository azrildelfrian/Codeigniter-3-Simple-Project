<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Klien Kami',
			'content' => 'pages/klien'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
