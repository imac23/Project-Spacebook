   <div id="maincontent">
      <div id="primary">    
        <p> 
          <?=$memberprofiletext;?>
        </p> 
        <?=form_open("message/leavemessage/$membername");?>
           <?php $msgbox = array('name'  => 'message',
                                 'rows'  => '2',
                                 'cols'  => '30');?>
           <?=form_textarea($msgbox);?>
           <?=form_submit('submit', 'Leave Message'); ?>
        <?=form_close(); ?> 
        
        <?=form_open("message/leavePrivatemessage/$membername");?>
           <?php $msgbox = array('name'  => 'privatemessage',
                                 'rows'  => '2',
                                 'cols'  => '30');?>
           <?=form_textarea($msgbox);?>
           <?=form_submit('submit', 'Leave Private Message'); ?>
        <?=form_close(); ?> 
        
      </div>  
      <div id="secondary">
        <div id="messages">
          <h2> Messages </h2>
            <ul>
              <?php foreach($messages as $message):
              $delete = $message['message_id'];?>
                <li><?=$message['from']?> says...: "<?=$message['message']?>"<?=anchor("message/deleteMessage/$delete",'Delete Messsage')?></li>      
              <?php endforeach?>
            </ul>
        </div>
      </div>
 
    </div>	
  