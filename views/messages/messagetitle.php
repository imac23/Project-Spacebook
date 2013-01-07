   <?php  session_start();
if ($this->session->userdata('status')!='OK')
{
	redirect('start');
}
?>
  <body id="messages">
    <div id="header">
      
      <h1> 
        <?=$username?>'s Messages
      </h1>
    </div>