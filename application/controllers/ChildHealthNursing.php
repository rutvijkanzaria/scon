<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChildHealthNursing extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('child-health-nursing');
		$this->load->view('footer', $data);
	}

	public function history() {
		$this->load->view('test');
	}
}
