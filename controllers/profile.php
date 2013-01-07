<?php
class Profile extends CI_Controller 
{
  function Profile()
  {
    parent::__construct();
    $this->load->model("profiles");
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
  
   
  function view($membername)
  {
    $viewData['membername'] = $membername;
    $viewData['memberprofiletext'] = $this->profiles->getProfileText($membername);
    $viewData['messages'] = $this->messages->getMessages($membername);
    $viewData['privatemessage'] = $this->privatemessages->getPrivateMessages($membername);

    $this->load->view('shared/header');
    $this->load->view('friendprofile/friendprofiletitle', $viewData);
    $this->load->view('shared/nav');
    $this->load->view('friendprofile/friendprofileview', $viewData);
    $this->load->view('friendprofile/friendprofilefooter');
  }
}