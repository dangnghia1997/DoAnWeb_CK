<?php
//models
include("models/m_nha_cung_cap.php");
$m_nha_cung_cap=new M_nha_cung_cap();
$ds_nha_cung_cap=$m_nha_cung_cap->Doc_tat_ca_nha_cung_cap();


//views
$view="views/nha_cung_cap/v_ds_nha_cung_cap.php";
include("templates/layout.php");
?>