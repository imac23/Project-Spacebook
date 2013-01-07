<?php
class Login extends CI_Controller 
{
  function Login()
  {
    parent::__construct();
    $this->load->model('membership');
  }

  function loguserin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->form_validation->set_rules('username','Username', 'trim|required|callback_username_error|xss_clean');
    $this->form_validation->set_rules('password','Password', 'required');
    $valid = $this->membership->validateUser($username, $password);
    
    if ($this->form_validation->run() === FALSE){
    	$data['error_message'] = "Please enter your username and password"; 	
    	
    }
    	if ($valid == true)
    	{
    	$this->session->set_userdata('status', 'OK');
    	$this->session->set_userdata('username', $username);
    	
    	redirect('home');
    	
    }else {
    	$this->session->set_userdata('status', 'NOT_OK');
    	$this->load->view('shared/header');
    	$this->load->view('account/logintitle');
    	$this->load->view('account/loginview');
    	$this->load->view('shared/footer');
    	echo 'Error logging in';
       
    }
  }
  
  function logout()
  {
  	redirect ('start');
  }
  
  function index()
  {
    $this->load->view('shared/header');
    $this->load->view('account/logintitle');
    $this->load->view('account/loginview');
    $this->load->view('shared/footer');
  }
  
}