  <div id="loginform">  
  

    <p>
       <?=form_open('login/loguserin');?>
    
     	<?php echo form_error('username')?>
        Username: <?=form_input('username');?>
     
      <?php echo form_error('password')?>
        Password: <?=form_password('password');?>
     
      <?php echo form_error('Login')?>
      <?=form_submit('submit', 'Login'); ?>
      </p>
      <?=form_close(); ?>
  </div>