      <?php  session_start();
if ($this->session->userdata('status')!='OK')
{
	redirect('start');
}
?>  
    <body id="home">

    <div id="header">
      <h1> 
        Welcome <?=$username?>
      </h1>
    </div>