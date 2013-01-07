<html>
    <head>
    
    </head>
    <title>Gallery</title>
    
    </head>
    
    <body>
          <div id= "gal">
      
      <?php foreach($galleryimage as $gallery):
      $delete = $gallery['gallery_id'];?> 
      
    <a class="thumbnail" href="#thumb"><img src="<?=$gallery['galleryimage']?>" width="150px" height="150px" border="1" />
       <span><img src="<?=$gallery['galleryimage']?>" /></span></a>
    	
      <?=anchor("mygallery/deleteImage/$delete",'Delete')?>
       <?php endforeach?>
        
             </div>      
      <div id= "gal">  
          
             <?=form_open_multipart('mygallery/do_upload');?>
             <?=form_upload('userfile'); ?> 
             <?=form_submit('upload', 'Upload');?>
             <?=form_close(); ?> 
      </div>
       
    </body>
</html>