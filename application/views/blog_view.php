<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<h1>Hello World</h1>

<?php foreach($rows as $row){ ?>
	
	<h2><?=$row->title?></h2>
    <p><?=$row->content?></p>
	
<?php } ?>
</body>
</html>