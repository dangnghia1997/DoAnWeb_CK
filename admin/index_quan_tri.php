<?php
session_start();
include("controllers/c_quan_tri.php");
$c_quan_tri=new C_quan_tri();
$c_quan_tri->Hien_thi_Trang_Chu_quan_tri();
?>