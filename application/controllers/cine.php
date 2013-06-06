<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cine extends CI_Controller {

	public function index()
	{
		$this->load->view('cine/cine_view');
	}
}

