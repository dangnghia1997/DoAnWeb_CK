<?php
@session_start();
include("controllers/c_user.php");
$c_user=new C_user();
$c_user->Dang_xuat();
?>