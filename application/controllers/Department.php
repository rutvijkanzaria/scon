<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
	public function medical_surgical_nursing()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('medical-surgical-nursing');
		$this->load->view('footer', $data);
	}

	public function child_health_nursing()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('child-health-nursing');
		$this->load->view('footer', $data);
	}

	public function community_health_nursing()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('community-health-nursing');
		$this->load->view('footer', $data);
	}

	public function mental_health_nursing()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('mental-health-nursing');
		$this->load->view('footer', $data);
	}

	public function obstetrics_gynaecological_nursing()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('obstetrics-gynaecological-nursing');
		$this->load->view('footer', $data);
	}

	public function nursing_foundation()
	{
		$data = array(
			'active_page' => 'dept'
		);

		$this->load->view('header', $data);
		$this->load->view('nursing-foundation');
		$this->load->view('footer', $data);
	}
}
