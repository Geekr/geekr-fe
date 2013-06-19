<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller {
	
	 function __construct()
{
    // Call the Model constructor
    parent::__construct();
	$this->load->model('home_model');

}
	
	public function index()
{
	$this->load->model('home_model');
	
	$this->load->library('pagination');
	$config['base_url'] = base_url().'home';
	$config['total_rows'] = $this->home_model->todos();
	$config['per_page'] = '5'; 
	$config['uri_segment'] = 2;
	$config['num_links'] = 5;
	$config['first_link'] = 'Primeras';
	$config['last_link'] = '&Uacute;ltimas';
	$config['full_tag_open'] = '<div class="paginado" >';
	$config['full_tag_close'] = '</div>';
	$config['next_link'] = 'Siguiente';
	$config['prev_link'] = 'Anterior';
	$config['display_pages'] = TRUE;
	$this->pagination->initialize($config);
	

	$data['posts'] = $this->home_model->get_post($config['per_page'], $this->uri->segment(2));
	$data['fav'] = $this->home_model->fav_post();
	$data['posts'] = $this->home_model->autor_post();
	
	$this->load->view('home/home_view', $data);

	}
						
	
	public function ver_post($slug)
	{
	
	$this->load->model('home_model');
	$data['ruta'] = $this->home_model->ruta_post($slug);	
	$this->load->view('home/post_view',$data);
	
	}


	
}

