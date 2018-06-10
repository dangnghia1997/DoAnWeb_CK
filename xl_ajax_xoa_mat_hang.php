<?php
@session_start();
$ma_san_pham=$_POST["ma_san_pham"];
$don_gia=$_POST["don_gia"];

include("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
$c_gio_hang->Xoa_Mat_Hang($ma_san_pham,$don_gia);

echo "<pre>";
print_r($_SESSION["gio_hang"]);
?>