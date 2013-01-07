<?php
class Members extends CI_Controller 
{
  function Members()
  {
    parent::__construct();
    $this->load->model("membership");
    $this->load->model('friends');
    $this->load->model('profiles');
  }
  
  function addfriend($friendname)
  {
    $username = $this->session->userdata('username');
    $this->friends->addFriend($username, $friendname);
    redirect ('home');
  }
  
  function deleteFriend($username){
  	
  	$username = $this->session->userdata('username');
  	
  	$data = array(
  			'username' => $username
  			);
  	
  	$this->membership->deleteFriend($data);
  	redirect ('home');
  }
  
  function index()
  {
  	$username = $this->session->userdata('username');
    $membersList = $this->membership->getOtherMembers($username);
    $viewData['members'] = $membersList;

    $this->load->view('shared/header');
    $this->load->view('members/memberstitle');
    $this->load->view('shared/nav');
    $this->load->view('members/membersview', $viewData);
    $this->load->view('friendprofile/friendprofilefooter');
  }
}