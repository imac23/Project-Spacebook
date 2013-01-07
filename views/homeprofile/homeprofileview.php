	<div id="maincontent">
      <div id="primary">    
    	
    	
    	<p>
    	<h3>Profile Image</h3>
    	</p>
    	
       <img src= "<?= $imagelocation;?>" height= "400" width= "300"/>
        <?=form_open_multipart('homeprofile/do_upload');?>
          <input type="file" name="userfile"/>   
          <input type="submit" name="submit" value="upload"/> 
          <?=form_close(); ?> 
      </div>  
     <div id="secondary">
        
          <?php echo $profileText;?>
          <?=form_open('homeprofile/changetext');?>
          <?php $msgbox = array(
              'name'  => 'profiletext',
              'rows'  => '8',
              'cols'  => '30',
            );?>
          <?=form_textarea($msgbox);?>
        
        <p>
          <?=form_submit('submit', 'Change'); ?>
          <?=form_close(); ?>
        </p>
        
        <div id="deleteaccount">
   <hr>
   
  <h3> Delete your Account? </h3>
 
        
        <?=form_open('homeprofile/deleteprofile');?>
        <form action="delete" method="post">
		<input type="submit" value="Delete your Account" onClick="alert('Are you sure you want to delete your account')"/>
        </form>
        <?=form_close(); ?> 
  		</div> 
  </div>
</div>