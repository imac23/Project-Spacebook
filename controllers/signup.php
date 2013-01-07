<?php
class Signup extends CI_Controller
{
	function Signup()
	{
		parent::__construct();
		$this->load->model('membership');
	}
	
  function register()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if ($this->membership->usernameTaken($username))
    {
      echo "Sorry, that name is taken!";
    } 
    else 
    {
      $this->membership->newUser($username, $password);
      redirect('start');
    }
  }
  
	function index()
	{
		$this->load->view('shared/header');
		$this->load->view('account/signuptitle');
		$this->load->view('account/signupview');
		$this->load->view('shared/footer');
	}
}