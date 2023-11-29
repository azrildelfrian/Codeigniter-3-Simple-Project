<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Hubungi Kami',
			'content' => 'pages/kontak'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
