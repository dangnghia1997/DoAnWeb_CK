<?php
//models
include("models/m_user.php");
$m_user=new M_user();
$ds_user=$m_user->Doc_tat_ca_user();

//views
$view="views/users/v_ds_users.php";
include("templates/layout.php");
?>