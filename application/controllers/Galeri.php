<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Galeri Foto',
			'content' => 'pages/galeri'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
