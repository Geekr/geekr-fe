<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Gaming extends CI_Controller {
	
	 function __construct()
{
    // Call the Model constructor
    parent::__construct();
	$this->load->model('gaming_model');

}
	
	public function index()
{
	$this->load->model('gaming_model');
	
	$this->load->library('pagination');
	$config['base_url'] = base_url().'gaming';
	$config['total_rows'] = $this->gaming_model->todos();
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
	

	$data['posts'] = $this->gaming_model->get_post($config['per_page'], $this->uri->segment(2));
	$data['fav'] = $this->gaming_model->fav_post();
	
	
	$this->load->view('gaming/gaming_view', $data);

	}
						
	
	public function ver_post($slug)
	{
	
	$this->load->model('gaming_model');
	$data['ruta'] = $this->gaming_model->ruta_post($slug);	
	$this->load->view('gaming/post_view',$data);
	
	}


	
}

