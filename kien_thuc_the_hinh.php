
<?php
$doc=new DOMDocument();
$doc->load("http://www.thehinh.com/the-hinh/kien-thuc-the-hinh/feed");
$articales= $doc->getElementsByTagName("item");


$view="views/kien_thuc_the_hinh/v_kien_thuc_the_hinh.php";
include("templates/layout.php");
?>