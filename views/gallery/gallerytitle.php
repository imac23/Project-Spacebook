      <?php  session_start();
if ($this->session->userdata('status')!='OK')
{
	redirect('start');
}
?>
    <body id="home">

    <div id="header">
      <h1> 
        <?=$username?>'s Gallery
      </h1>
    </div>