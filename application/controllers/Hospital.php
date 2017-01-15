<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'hospital'
		);

		$this->load->view('header', $data);
		$this->load->view('hospital');
		$this->load->view('footer', $data);
	}
}
