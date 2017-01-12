<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'home'
		);

		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer', $data);
	}
}
