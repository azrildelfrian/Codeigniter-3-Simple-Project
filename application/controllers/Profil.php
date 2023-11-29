<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Profil Klub',
			'content' => 'pages/profil'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
