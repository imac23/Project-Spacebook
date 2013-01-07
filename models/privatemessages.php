<?php
class PrivateMessages extends CI_Model
{
  private $messagesTable = 'privatemessages';
  
  function PrivateMessages()
  {
    parent::__construct();
  }
  
  function addPrivateMessage($from, $to, $message)
  {
  	$record = array('to'      => $to,
  			'from'    => $from,
  			'privatemessage' => $message);
  	$this->db->insert('privatemessages', $record);
  }
  
  function getPrivateMessages($username)
  {
  	
  	$this->db->select('*')->from('privatemessages, membership')->where('to', $username);
  	$this->db->where('from !=', $username);
  	$this->db->where('from = username');
  	$messagesSet = $this->db->get();
  
  	$privatemessages = array();
  	foreach ($messagesSet->result() as $row)
  	{
  		$privatemessages[] = array
  				
  		        ('message_id' => $row->message_id,
  		        'username' => $row->username,
  				'privatemessage' => $row->privatemessage);
  	}
  	return $privatemessages;
  }
 
}