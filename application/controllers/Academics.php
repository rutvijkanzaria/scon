<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academics extends CI_Controller {
	public function bsc()
	{
    $data = array(
      'active_page' => 'academics'
    );

		$this->load->view('header', $data);
		$this->load->view('bsc');
		$this->load->view('footer', $data);
	}

	public function pbbsc()
	{
    $data = array(
      'active_page' => 'academics'
    );

		$this->load->view('header', $data);
		$this->load->view('pbbsc');
		$this->load->view('footer', $data);
	}

	public function msc()
	{
    $data = array(
      'active_page' => 'academics'
    );

		$this->load->view('header', $data);
		$this->load->view('msc');
		$this->load->view('footer', $data);
	}
}
