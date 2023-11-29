<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		$data = array(
			'title' => 'Event',
			'content' => 'pages/event'
		);
		$this->load->view('section/wrapper', $data, FALSE);
	}
}
