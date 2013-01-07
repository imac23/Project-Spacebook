<div id="maincontent">
     <div id="primary">   
       <div id="messages">
        <h2> Public Messages </h2> 
       
              <ul>
              <?php foreach($messages as $message):
              $delete = $message['message_id'];?>
                <li><?=$message['from']?> says...: "<?=$message['message']?>"<p><?=anchor("message/deleteMessage/$delete",'Delete Messsage')?></li>      
              <?php endforeach?>
            </ul>      
       
       
      </div>  
 </div>  
 
  </div>
     <div id="secondary">
        <div id="messages">
        <h2> Private Messages </h2>
        <ul>
              <?php foreach($privatemessages as $privatemessage):
              
              $delete = $privatemessage['message_id'];?>
              <li> From: <?=$privatemessage['username']?> ...: "<?=$privatemessage['privatemessage']?>" <p><?=anchor("message/deletePrivateMessage/$delete",'Delete Messsage')?> </li>
                 
              <?php endforeach?> 
           </ul>   
         
    </div>
    </div>