    <?php  session_start();
if ($this->session->userdata('status')!='OK')
{
	redirect('start');
}
?>
  <body id="homeprofile">
    <div id="header">
      
      <h1> 
       <?=$username?>'s Profile
      </h1>
    </div>