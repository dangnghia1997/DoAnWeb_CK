<?php
//models
include("models/m_don_hang.php");
$m_don_hang=new M_don_hang();
$ds_don_hang=$m_don_hang->Doc_tat_ca_don_hang();


//views
$view="views/don_hang/v_ds_don_hang.php";
include("templates/layout.php");
?>