<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Animanga extends CI_Controller {
	
	 function __construct()
{
    // Call the Model constructor
    parent::__construct();
	$this->load->model('animanga_model');

}
	
	public function index()
{
	$this->load->model('animanga_model');
	
	$this->load->library('pagination');
	$config['base_url'] = base_url().'animanga';
	$config['total_rows'] = $this->animanga_model->todos();
	$config['per_page'] = '3'; 
	$config['uri_segment'] = 2;
	$config['num_links'] = 5;
	$config['first_link'] = '<<';
	$config['last_link'] = '>>';
	$config['full_tag_open'] = '<div class="pride_pg" >';
	$config['full_tag_close'] = '</div>';
	$config['next_link'] = 'Siguiente';
	$config['prev_link'] = 'Anterior';
	$config['display_pages'] = TRUE;
	$this->pagination->initialize($config);
	

	$data['posts'] = $this->animanga_model->get_post($config['per_page'], $this->uri->segment(2));
	$data['fav'] = $this->animanga_model->fav_post();
	/*$data['posts'] = $this->gaming_model->autor_post();*/
	
	$this->load->view('animanga/animanga_view', $data);

	}
						
	
	public function ver_post($slug)
	{
	
	$this->load->model('animanga_model');
	$data['ruta'] = $this->animanga_model->ruta_post($slug);	
	$this->load->view('animanga/post_view',$data);
	
	}


	
}

