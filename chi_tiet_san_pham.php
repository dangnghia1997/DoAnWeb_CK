<?php
session_start();
include("controllers/c_chi_tiet_san_pham.php");
$c_chi_tiet_san_pham=new C_chi_tiet_san_pham();
$c_chi_tiet_san_pham->Hien_thi_chi_tiet_san_pham();
?>