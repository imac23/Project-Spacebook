<?php
class HomeProfile extends CI_Controller 
{
	
  function HomeProfile()
  {
    parent::__construct();
    $this->load->model("profiles");
    $this->load->model("membership");
    $this->load->model("friends");
    $this->load->model("messages");
    $this->load->model("privatemessages");
    $this->load->helper(array('form','url'));
     }
  
  function changetext()
  {
  $username = $this->session->userdata('username');
  $this->profiles->putProfileText($username, $this->input->post("profiletext"));
  redirect('homeprofile/index');
  } 
  
  function deletetext()
  {
  	$username = $this->session->userdata('username');
  	$this->profiles->deleteProfileText($username);
  	redirect('homeprofile/index');
  }
  
 function deleteprofile()
  {
  	$deleteaccount = $this->session->userdata('username');
  	$this->membership->deleteuser($deleteaccount);
  	$this->friends->deletefriends($deleteaccount);
  	$this->messages->deleteallmessages($deleteaccount);
  	$this->profiles->deleteprofiletext($deleteaccount);
   	$this->session->unset_userdata('username');
  	$this->session->sess_destroy();
  	redirect('start');
  	
  	
  }
  
  function index()
  {
    $username = $this->session->userdata('username');
    $imagelocation = $this->session->userdata('imagelocation');
    
    $viewData['username'] = $username;
  	$viewData['profileText'] = $this->profiles->getProfileText($username);
  	$viewData['imagelocation'] = $this->profiles->getProfileImage($username);
  
    $this->load->view('shared/header');
    $this->load->view('homeprofile/homeprofiletitle', $viewData);
    $this->load->view('shared/nav');
    $this->load->view('homeprofile/homeprofileview');
    $this->load->view('friendprofile/friendprofilefooter');
    }


  
  function do_upload()
  {
  	$config['upload_path'] = 'spacebook2/assets/images/';
  	$config['allowed_types'] = 'jpg|jpeg|gif|png';
  	$config['maintain_ratio'] = TRUE;
  	$config['width'] = 300;
    $config['height'] = 300;
  	
  	$this->load->library('upload', $config);
  	$this->upload->initialize($config);
  	$field_name = "userfile";
  
  	if ( ! $this->upload->do_upload())
  	{
  		$error = array('error' => $this->upload->display_errors());
  		redirect('homeprofile/index');
  		
  	}
  	else
  	{
  		$username = $this->session->userdata('username');
  		$image_data = $this->upload->data();
  		$filename=$image_data[file_name]; 		
  		$this->profiles->putProfileImage($username, base_url()."spacebook2/assets/images/".$filename);
  		redirect('homeprofile/index');
  		
  
  	}
  }
  }
  ?>