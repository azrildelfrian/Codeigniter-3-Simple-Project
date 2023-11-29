<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Visi dan Misi',
			'content' => 'pages/visi_misi'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
