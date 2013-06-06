<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animanga extends CI_Controller {

	public function index()
	{
		$this->load->view('animanga/animanga_view');
	}
}

