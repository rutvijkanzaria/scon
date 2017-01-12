<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$data = array(
			'active_page' => 'home'
		);

		$this->load->view('header', $data);
		$this->load->view('contact-us');
		$this->load->view('footer', $data);
	}
}
