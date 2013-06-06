<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comics extends CI_Controller {

    public function index()
    {
        $this->load->view('comics/comics_view');
    }
}

