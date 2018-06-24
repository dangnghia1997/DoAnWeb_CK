<?php

//models
include("models/m_san_pham.php");
include("models/phan_trang.php");
$m_san_pham=new M_san_pham();
$ds_san_pham=$m_san_pham->Doc_tat_ca_san_pham();
/*****phân trang***********/
$pager=new pager();
$count=count($ds_san_pham);
$limit = 10;
$curpage=1;
if(isset($_GET['page'])) $curpage=$_GET['page'];
$vt=$pager->findStart($limit);
$pages=$pager->findPages($count,$limit);
$phan_trang=$pager->pageList($curpage,$pages);
$ds_san_pham=$m_san_pham->Doc_tat_ca_san_pham($vt,$limit);

/******END--PHÂN TRANG***********/
//views
$view="views/san_pham/v_ds_san_pham.php";
include("templates/layout.php");
?>