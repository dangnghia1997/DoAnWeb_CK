<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
date_default_timezone_set("Asia/Bangkok");
echo date('Y-m-d')."<br>";
$nam=substr(date('Y-m-d'),0,4);
$arr=explode("-",date('Y-m-d'));
echo $nam."<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";

?>
<body>
</body>
</html>