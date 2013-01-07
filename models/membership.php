<?php
class Membership extends CI_Model
{
  function Membership()
  {
    parent::__construct();
  }
  
  function newUser($username, $password)
  {
  	$newMember  = array ('username' => $username, 'password' => $password);
  	$insert = $this->db->insert('membership', $newMember);
  }
  
  function deleteuser($username)
  
  {
  	$deleteuser = $this->db->select('*')->from('membership')->where('username', $username);
  	 
  	$delete = $this->db->delete('membership', $deleteuser);
  }

  function usernameTaken($username)
  {
  	$this->db->select('*')->from('membership')->where('username', $username);
  	$query = $this->db->get();
  	if ($query->num_rows > 0)
  	{
  		return true;
  	}
  	else
  	{
  		return false;
  	}
  }
  
  function validateUser($username, $password)
  {
  	$this->db->select('*')->from('membership');
  	$this->db->where('username', $username);
  	$this->db->where('password', $password);
  	$query = $this->db->get();
  	if ($query->num_rows == 1)
  	{
  		return true;
  	}
  	else
  	{
  		return false;
  	}
  }
  
  function getMembers()
  {
  	$membersSet = $this->db->get('membership');
  	$members = array();
  	foreach ($membersSet->result() as $row)
  	{
  		$members[] = $row->username;
  	}
  	return $members;
  }
  
  function getOtherMembers($username)
  {
  	$this->db->select('*')->from('membership')->where('username !=', $username);
  	$membersSet = $this->db->get();
  	$membersList = array();
  	foreach ($membersSet->result() as $row)
  	{
  		$membersList[] = $row->username;
  	}
  	return $membersList;
  }
}