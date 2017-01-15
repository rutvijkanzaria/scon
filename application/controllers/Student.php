<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function events()
	{
    $data = array(
      'active_page' => 'student'
    );

		$this->load->view('header', $data);
		$this->load->view('events');
		$this->load->view('footer', $data);
	}

	public function photos()
	{
    $data = array(
      'active_page' => 'student'
    );

		$this->load->view('header', $data);
		$this->load->view('photos');
		$this->load->view('footer', $data);
	}

	public function clubs()
	{
    $data = array(
      'active_page' => 'student'
    );

		$this->load->view('header', $data);
		$this->load->view('clubs');
		$this->load->view('footer', $data);
	}
}
