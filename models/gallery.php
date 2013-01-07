<?php
class Gallery extends CI_Model
{
  private $galleryTable = 'gallery';
  
  function Gallery()
  {
    parent::__construct();
  }
  
 function putProfileGallery($username, $image)
  {
  	  $record = array('username' => $username, 'galleryimage' => $image);
  	
      $this->db->insert('gallery', $record);
      
  }
  
 function getProfileGallery($username)

  {
	$this->db->select('*')->from('gallery')->where('username', $username);
	$gallerySet = $this->db->get();
	
  	$gallery = array();
  	foreach ($gallerySet->result() as $row)
  	{		
  		$gallery[] = array('gallery_id' => $row->gallery_id,'username' => $row->username, 'galleryimage' => $row->galleryimage);
  	}
  	return $gallery;
  }
  
  function deleteImage($gallery_id)
  {
  	$record = array('gallery_id' => $gallery_id);
  	$this->db->delete('gallery', $record);
  }
  
 }
  