<?php
session_start();
include("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
$ma_san_pham=$_POST["id"];
$soluong=$_POST["soluong"];
$dongia=$_POST["dongia"];

$c_gio_hang->Them_gio_hang($ma_san_pham,$dongia,$soluong);

$arrGioHang=array('sl'=>$c_gio_hang->GetSoLuong(),'tt'=>number_format($c_gio_hang->GetThanhTien()));
echo json_encode($arrGioHang);
?>