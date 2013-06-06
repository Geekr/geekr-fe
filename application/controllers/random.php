<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function index()
	{
		$this->load->view('random/random_view');
	}
}

