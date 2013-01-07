<html>
<head>
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>spacebook2/assets/home.css" media="screen" />

<title><?=$title?></title>
</head>

<body>
<div id="maincontent">
<img src="<?=base_url()?>spacebook2/assets/ban12.jpg" width= "1280px" height= "150px">
<h1>Please Comment</h1>

<?php if ($query->num_rows() > 0):?>

<?php foreach($query->result() as $row): ?>


<p><?=$row->body?></p>
<p><?=$row->author?></p>

<hr>

<?php endforeach;?>

<?php endif;?>

<p><?=anchor('blog', 'Back to Blog Page');?></p>

<?=form_open('blog/comment_insert')?>

<?=form_hidden('entry_id', $this->uri->segment(3));?>

<p><textarea name= "body" rows="10"></textarea></p>
<p><input type="text" name="author" /></p>
<p><input type="submit" value="Submit Comment" /></p>

<?=form_close(); ?>
</div>
</body>

</html>

