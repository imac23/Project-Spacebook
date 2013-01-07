<html>
<head>
<title><?=$title?></title>
</head>


<body>
<h2><?=$heading?></h2>

<?php foreach($query->result() as $row): ?>

<h4><?=$row->title?></h4>
<p><?=$row->body?></p>

<p><?=anchor('blog/comments/'.$row->id, 'Comments')?></p>

<hr>

<?php endforeach;?>


</body>
</html>
