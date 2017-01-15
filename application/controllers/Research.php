<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'research'
		);

		$this->load->view('header', $data);
		$this->load->view('research');
		$this->load->view('footer', $data);
	}
}
