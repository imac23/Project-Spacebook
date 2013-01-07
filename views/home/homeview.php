<div id="maincontent">
     <div id="primary">     
        <h3><?=$username?>'s Friends </h3> 
        <ul> 
          <?php foreach($friends['mutual'] as $name):?>
            <li>
              <?=anchor("profile/view/$name", $name)?>, (<?=anchor("home/drop/$name", 'drop')?>)
            </li>
          <?php endforeach?>
        </ul>
        <h3> <?=$username?> is following </h3> 
          <ul> 
            <?php foreach($friends['following'] as $name):?>
              <li>
                <?=anchor("profile/view/$name", $name)?>, (<?=anchor("home/drop/$name", 'drop')?>)
              </li>
            <?php endforeach?>
          </ul>
        <h3> <?=$username?>'s Followers </h3> 
          <ul> 
            <?php foreach($friends['followers'] as $name):?>
              <li>
                <?=anchor("profile/view/$name", $name)?>
              </li>
            <?php endforeach?>
          </ul>  
      </div>
      <div id="secondary">
      <p>
      <div id="profiletext">
      
      
        <h3> <?=$username?>'s status.... </h3> 
        <p>
          <?php echo $profileText;?>
          <p>
          <hr></hr>
       
        <h3> Member Status</h3>
        
                
          <?php foreach($friendprofiletext as $profileText):?>
          <p>        
          <?=$profileText['friend'];?> says...: "<?=$profileText['profiletext'];?>"
        <?php endforeach?>
       </p>
      </div>
      <div>
    </div>       
    </div>
 </div>
  