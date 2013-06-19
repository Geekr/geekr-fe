<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Tech extends CI_Controller {
	
	 function __construct()
{
    // Call the Model constructor
    parent::__construct();
	$this->load->model('tech_model');

}
	
	public function index()
{
	$this->load->model('tech_model');
	
	$this->load->library('pagination');
	$config['base_url'] = base_url().'tech';
	$config['total_rows'] = $this->tech_model->todos();
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
	

	$data['posts'] = $this->tech_model->get_post($config['per_page'], $this->uri->segment(2));
	$data['fav'] = $this->tech_model->fav_post();
	
	
	$this->load->view('tech/tech_view', $data);

	}
						
	
	public function ver_post($slug)
	{
	
	$this->load->model('tech_model');
	$data['ruta'] = $this->tech_model->ruta_post($slug);	
	$this->load->view('tech/post_view',$data);
	
	}


	
}

