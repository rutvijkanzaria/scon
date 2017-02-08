<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admissions extends CI_Controller {
	public function index()
	{
    $data = array(
      'active_page' => 'admissions'
    );

		$this->load->view('header', $data);
		$this->load->view('admissions');
		$this->load->view('footer', $data);
	}

	public function why()
	{
    $data = array(
      'active_page' => 'admissions'
    );

		$this->load->view('header', $data);
		$this->load->view('why');
		$this->load->view('footer', $data);
	}

	public function courses()
	{
    $data = array(
      'active_page' => 'admissions'
    );

		$this->load->view('header', $data);
		$this->load->view('courses');
		$this->load->view('footer', $data);
	}

	public function apply()
	{
    $data = array(
      'active_page' => 'admissions'
    );

		$this->load->view('header', $data);
		$this->load->view('apply');
		$this->load->view('footer', $data);
	}

  public function guidelines()
	{
    $data = array(
      'active_page' => 'admissions'
    );

		$this->load->view('header', $data);
		$this->load->view('guidelines');
		$this->load->view('footer', $data);
	}
}
