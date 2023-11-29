<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Produk Kami',
			'content' => 'pages/produk'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
