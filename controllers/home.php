<?php

class Home extends CI_Controller 
{
  function Home()
  {
  	parent::__construct();
  	$this->load->model("profiles");
  	$this->load->model('messages');
  	$this->load->model('friends');
  	$this->load->model('membership');
  }
  
  function drop($member)
  {
  	$username = $this->session->userdata('username');
  	$this->friends->deleteFriend($username, $member);
  	redirect('home');
  }

function leavemessage($for)
  {
  	$message = $this->input->post("message");
  	$username = $this->session->userdata('username');
  	$this->messages->addMessage($username, $for, $message);
  	redirect ("home/index/$for");
  }
  
  function index()
  {
   
  	$username = $this->session->userdata('username');
  	$viewData['friendprofiletext'] = $this->profiles->getFriendsProfileText($username);
  	$viewData['profileText'] = $this->profiles->getProfileText($username);
  	 
  	$viewData['username'] = $username;
  	$viewData['friends'] = $this->friends->getFriends($username);
  	
  	$this->load->view('shared/header');
  	$this->load->view('home/hometitle', $viewData);
  	$this->load->view('shared/nav');
  	$this->load->view('home/homeview', $viewData);
  	$this->load->view('home/homefooter');
 
  }
  
}