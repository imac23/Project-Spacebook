<?php

class Blog extends CI_Controller {
	
	private $db_b;
	
	function Blog()
	{
		
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->db_b = $this->load->database('b', TRUE);
		
		
	
	
	}
		function index()
		{
			$username = $this->session->userdata('username');
			$viewData['username'] = $username;
			$data['title'] = "My Blog Title";
			$data['heading'] = "Spacebook Blog";
			$data['query'] = $this->db_b->get('entries');		
			$this->load->view('shared/header');
			$this->load->view('blog/blogtitle', $viewData);			
			$this->load->view('shared/nav');		
			
			$this->load->view('blog/blog_view', $data, $viewData);
			
			
		}
		
		function comments()
		
		{
			
			$data['title'] = "My Comment Title";
			$data['heading'] = "My Comment Heading";
			$this->db_b->where('entry_id', $this->uri->segment(3));
			$data['query'] = $this->db_b->get('comments');
			
			$this->load->view('blog/comment_view', $data);
		}
		
		function comment_insert()
		{
			
			$this->db_b->insert('comments',$_POST);
			redirect('blog/comments/'. $_POST['entry_id']);
		}
}
?>