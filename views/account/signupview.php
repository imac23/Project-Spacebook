  <div id="signupform">  
    <p>
    <?=form_open('signup/register');?>
      
        Username <?=form_input('username');?>
    
        Password <?=form_password('password');?>
     
      <?=form_submit('submit', 'Register'); ?>
      <?=form_close(); ?>
    </p>
  </div>