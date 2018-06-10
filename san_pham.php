<?php
session_start();
include("controllers/c_san_pham.php");
$C_san_pham=new C_san_pham();
$C_san_pham->Hien_thi_san_pham();
?>