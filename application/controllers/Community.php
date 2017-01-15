<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {
	public function urban()
	{
    $data = array(
      'active_page' => 'community'
    );

		$this->load->view('header', $data);
		$this->load->view('urban');
		$this->load->view('footer', $data);
	}

	public function rural()
	{
    $data = array(
      'active_page' => 'community'
    );

		$this->load->view('header', $data);
		$this->load->view('rural');
		$this->load->view('footer', $data);
	}

}
