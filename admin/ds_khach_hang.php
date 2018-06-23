<?php
//models
include("models/m_khach_hang.php");
$m_khach_hang=new M_khach_hang();
$ds_khach_hang=$m_khach_hang->Doc_tat_ca_khach_hang();


//views
$view="views/khach_hang/v_ds_khach_hang.php";
include("templates/layout.php");
?>