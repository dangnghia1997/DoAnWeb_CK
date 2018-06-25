<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
$mang=array("MOT"=>1,"HAI"=>2,3,4,5,6,7,8,9,"HAI BA");
?>
<body>

<h1>1</h1>
<h1>1</h1>
<h1>1</h1>
<h1>1</h1>
<h1>1</h1>
<h1>1</h1>

--------------------------
<?php
foreach($mang as $K => $i)
{
?>
<h1><?php echo $i."----".$K;?></h1>
<?php
}
?>
</body>
</html>
