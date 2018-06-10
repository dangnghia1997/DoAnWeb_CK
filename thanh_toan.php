<?php
//models
include("models/m_tinh_thanh.php");
$m_tinh_thanh=new M_tinh_thanh();
$ds_tinh_thanh=$m_tinh_thanh->Doc_tat_ca_tinh_thanh();



//views
$view="views/thanh_toan/v_thanh_toan.php";
include("templates/layout.php");
?>