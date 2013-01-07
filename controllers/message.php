<?php
class Message extends CI_Controller 
{
function Message()
  {
  	parent::__construct();
  	$this->load->model('profiles');
  	$this->load->model('messages');
  	$this->load->model('privatemessages');
  	$this->load->model('friends');
  	$this->load->model('membership');
  	
  }
  
  function leavemessage($for)
  {
  	$message = $this->input->post("message");
  	$username = $this->session->userdata('username');
  	$this->messages->addMessage($username, $for, $message);
  	redirect ("profile/view/$for");
  }
  
  function deleteMessage($messageid)
  {
  	$this->messages->deleteMessage($messageid);
  	redirect ("home");
  }
  
  function leavePrivatemessage($for)
  {
  	$message = $this->input->post("privatemessage");
  	$username = $this->session->userdata('username');
  	$this->privatemessages->addPrivateMessage($username, $for, $message);
  	redirect ("profile/view/$for");
  }
  
  function deletePrivateMessage($messageid)
  {
  	$this->messages->deletePrivateMessage($messageid);
  	redirect ("message");
  }
  
  function index()
  {
  	
  	$username = $this->session->userdata('username');
  	$viewData['username'] = $username;
  	$viewData['privatemessages'] = $this->privatemessages->getPrivateMessages($username);
  	$viewData['messages'] = $this->messages->getMessages($username);
  	
  	$this->load->view('shared/header');
  	$this->load->view('messages/messagetitle', $viewData);
  	$this->load->view('shared/nav');
  	$this->load->view('messages/messageview', $viewData);
  	$this->load->view('friendprofile/friendprofilefooter');
 
  }
}