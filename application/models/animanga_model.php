<?php
class animanga_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	
		function get_post($cuantos= 8, $desde = 0)
     {  


		$this->db->where('blog_post.estado',1);
		$this->db->where('blog_post.categoria','animanga');
		$query = $this->db->get('blog_post', $cuantos, $desde);
	    $this->db->order_by('id','desc');
        return $query;
	}
	
		function todos()
    {
		$this->db->where('blog_post.estado',1);
		$this->db->where('blog_post.categoria','animanga');
	    $query = $this->db->get('blog_post,autor_post');
		$this->db->order_by('id','desc');
        return $query->num_rows();
    }
	
		function ruta_post ($slug) {
		
		$this->db->where('slug',$slug);
		$this->db->where('blog_post.autor = autor_post.id_autor');
		$query = $this->db->get('blog_post,autor_post');
        return $query;


	}
		function autor_post () {
		$this->db->where('autor_post.estado_autor',1);
		$this->db->where('autor_post.id_autor = blog_post.autor');
		$query = $this->db->get('autor_post,blog_post');
		return $query;
		
	}

		function fav_post ($cuantos= 3, $desde = 0) {
		$this->db->where('blog_post.fav',1);
		$this->db->where('blog_post.categoria','animanga');
		$query = $this->db->get('blog_post', $cuantos, $desde);
		$this->db->order_by('id','desc');
		return $query;
		


	}

	
	
}
