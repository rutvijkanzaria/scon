<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus extends CI_Controller {
	public function infrastructure()
	{
    $data = array(
      'active_page' => 'campus'
    );

		$this->load->view('header', $data);
		$this->load->view('infrastructure');
		$this->load->view('footer', $data);
	}

	public function library()
	{
    $data = array(
      'active_page' => 'campus'
    );

		$this->load->view('header', $data);
		$this->load->view('library');
		$this->load->view('footer', $data);
	}

	public function hostels()
	{
    $data = array(
      'active_page' => 'campus'
    );

		$this->load->view('header', $data);
		$this->load->view('hostels');
		$this->load->view('footer', $data);
	}

	public function transport()
	{
    $data = array(
      'active_page' => 'campus'
    );

		$this->load->view('header', $data);
		$this->load->view('transport');
		$this->load->view('footer', $data);
	}

	public function recreation()
	{
    $data = array(
      'active_page' => 'campus'
    );

		$this->load->view('header', $data);
		$this->load->view('recreation');
		$this->load->view('footer', $data);
	}
}
