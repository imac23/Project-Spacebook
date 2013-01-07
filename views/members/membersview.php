    <div id="maincontent">
      <div id="primarymember">   
        <h2> Members </h2>
        
        <h6>Select a member to leave them a message or click add to add them!</h6>
        <ul>
          <?php foreach($members as $membername):?>
            <li>
              <?=anchor("profile/view/$membername", $membername)?>    [<?=anchor("members/addfriend/$membername", 'Add')?>]
            </li>
          <?php endforeach?>
        </ul>
      </div>  
      
    </div>
  