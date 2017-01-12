<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function history()
	{
    $data = array(
      'active_page' => 'about'
    );

		$this->load->view('header', $data);
		$this->load->view('history');
		$this->load->view('footer', $data);
	}

	public function vision()
	{
    $data = array(
      'active_page' => 'about'
    );

		$this->load->view('header', $data);
		$this->load->view('vision');
		$this->load->view('footer', $data);
	}

	public function accreditation()
	{
    $data = array(
      'active_page' => 'about'
    );

		$this->load->view('header', $data);
		$this->load->view('accreditation');
		$this->load->view('footer', $data);
	}

	public function committees()
	{
    $data = array(
      'active_page' => 'about'
    );

		$this->load->view('header', $data);
		$this->load->view('committees');
		$this->load->view('footer', $data);
	}

	public function location()
	{
    $data = array(
      'active_page' => 'about'
    );

		$this->load->view('header', $data);
		$this->load->view('location');
		$this->load->view('footer', $data);
	}
}
