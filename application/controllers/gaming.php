<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gaming extends CI_Controller {

    public function index()
    {
        $this->load->view('gaming/gaming_view');
    }
}

