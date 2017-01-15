<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'alumni'
		);

		$this->load->view('header', $data);
		$this->load->view('alumni');
		$this->load->view('footer', $data);
	}
}
