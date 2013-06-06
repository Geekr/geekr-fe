<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tech extends CI_Controller {

	public function index()
	{
		$this->load->view('tech/tech_view');
	}
}

