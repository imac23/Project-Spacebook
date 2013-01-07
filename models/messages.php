<?php
class Messages extends CI_Model
{
  private $messagesTable = 'messages';
  
  function Messages()
  {
    parent::__construct();
  }
  
  function addMessage($from, $to, $message)
  {
  	$record = array('to'      => $to,
                    'from'    => $from,
                    'message' => $message);
  	$this->db->insert('messages', $record);
  }

  function deleteallmessages($user)
  
  {
  	$deleteaccount = $this->db->select('*')->from('messages')->where('id', $user);
  	$delete = $this->db->delete('messages', $deleteaccount);
  	$deleteaccount = $this->db->select('*')->from('messages')->where('from', $user);
   	$delete = $this->db->delete('messages', $deleteaccount);
   	$deleteaccount = $this->db->select('*')->from('messages')->where('to', $user);
   	$delete = $this->db->delete('messages', $deleteaccount);
  	 
  }

    function getMessages($user)
  {
  	$this->db->select('*');
  	$this->db->from('messages');
  	$this->db->where('to', $user);
  	$messagesSet = $this->db->get();
  
  	$messages = array();
  	foreach ($messagesSet->result() as $row)
  	{
  		$messages[] = array('message_id'=> $row->message_id,
  							'from'    => $row->from,
                          'message' => $row->message);
  	}
  	return $messages;
  }
  
  function deleteMessage($message_id)
  {
  	$record = array('message_id' => $message_id);
  	$this->db->delete('messages', $record);
  }
  
  function deletePrivateMessage($message_id)
  {
  	$record = array('message_id' => $message_id);
  	$this->db->delete('privatemessages', $record);
  }
}