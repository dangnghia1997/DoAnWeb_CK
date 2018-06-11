<?php
session_start();
include("controllers/c_thanh_toan.php");
$c_thanh_toan=new C_thanh_toan();
$c_thanh_toan->Hien_thi_thanh_toan();
?>