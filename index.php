<?php
session_start();
include("controllers/c_trang_chu.php");
$Trang_Chu=new C_trang_chu();
$Trang_Chu->Hien_Thi_Trang_Chu();
?>