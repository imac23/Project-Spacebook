<?php
class MyGallery extends CI_Controller 
{   
  function MyGallery()
  {
    parent::__construct();
    $this->load->model("profiles");
    $this->load->model("membership");
    $this->load->model("friends");
    $this->load->model("gallery");
    $this->load->model('messages');

    $this->load->helper(array('form','url'));
    
     }
     
function index()
  {
  	
    $username = $this->session->userdata('username');
    $viewData['username'] = $username;
    $viewData['galleryimage'] = $username;
  	$viewData['galleryimage'] = $this->gallery->getProfileGallery($username);
  
    $this->load->view('shared/header');
    $this->load->view('gallery/gallerytitle', $viewData);
    $this->load->view('shared/nav');
    $this->load->view('gallery/galleryview', $viewData);
    $this->load->view('friendprofile/friendprofilefooter');
  }
  
  function deleteImage($galleryid)
  {
  	$this->gallery->deleteImage($galleryid);
  	redirect ("mygallery");
  }

  function do_upload()
  {
  	$config['upload_path'] = 'spacebook2/assets/images/thumbnails/';
  	$config['allowed_types'] = 'jpg|jpeg|gif|png';
  	$config['maintain_ratio'] = TRUE;
  	$config['width'] = 200;
    $config['height'] = 200;
  	
  	$this->load->library('upload', $config);
  	$this->upload->initialize($config);
  	$field_name = "userfile";
  	
  	if ( ! $this->upload->do_upload())
  	{
  		$error = array('error' => $this->upload->display_errors());
		redirect('mygallery'); 	
  	}
  	else
  	{
  		$username = $this->session->userdata('username');
  		$image_data = $this->upload->data();
  		$filename=$image_data['file_name']; 		
  		$this->gallery->putProfileGallery($username, base_url()."spacebook2/assets/images/thumbnails/".$filename);
  		redirect('mygallery');
  		
  	}
  }
 
} 

?>