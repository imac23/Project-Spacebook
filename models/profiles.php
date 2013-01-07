<?php
class Profiles extends CI_Model
{
  function Profiles()
  {
    parent::__construct();
  }

  function exists($user)
  {
    $this->db->select('*')->from("profiles")->where('user', $user);
    $query = $this->db->get();
    if ($query->num_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
    
  function putProfileText($user, $text)
  {
  	$record = array('user' => $user, 'profiletext' => $text);
  	if ($this->exists($user))
  	{
  		$this->db->where('user', $user)->update('profiles', $record);
  	}
  	else
  	{
  		$this->db->where('user', $user)->insert('profiles', $record);
  	}
  }
  
  
  function putProfileImage($user, $text)
  {
  	$record = array('user' => $user, 'imagelocation' => $text);
  	if ($this->exists($user))
  	{
  		$this->db->where('user', $user)->update('profiles', $record);
  	}
  	else
  	{
  		$this->db->where('user', $user)->insert('profiles', $record);
  	}
  }
  
  function getProfileText($user)
  {
  	$this->db->select('*')->from('profiles')->where('user', $user);
  	$query = $this->db->get();
  	$row = $query->row();
  	if ($query->num_rows() > 0)
  	{
  		return $row->profiletext;
  	}
  	else
  	{
  		return "";
  	}
  }
 
  function getProfileImage($user)
  {
  	$this->db->select('*')->from('profiles')->where('user', $user);
  	$query = $this->db->get();
  	$row = $query->row();
  	if ($query->num_rows() > 0)
  	{
  		return $row->imagelocation;
  	}
  	else
  	{
  		return "";
  	}
  }
  
  	function deleteProfileText($user)
  	{
  		$record = array('user' => $user);
  		$this->db->where('user', $user)->delete('profiles', $record);
  	} 

  function deleteUser($user)
  
  {
  	$deleteuser = $this->db->select('*')->from('profiles')->where('user', $user);
  	$delete = $this->db->delete('profiles', $deleteuser);
  }
  
  function getFriendsProfileText($username)
  {
  
  	$this->db->select('*')->from('friends, profiles')->where('username', $username)->where('user !=', $username);
  	$this->db->where('user = friend');
  	$messagesSet = $this->db->get();
  
  	$friendprofiletext = array();
  	foreach ($messagesSet->result() as $row)
  	{
  		$friendprofiletext[] = array('friend'    => $row->friend,
  									  'profiletext' => $row->profiletext);
  	}
  	return $friendprofiletext;
  }
  
}