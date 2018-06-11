<?php
session_start();
include("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();

if(isset($_POST["btn_thanh_toan"]))
{
	header("location:thanh_toan.php");	
}

if(isset($_POST["btn_cap_nhat"]))
{
	$gio_hang=$c_gio_hang->GetGioHang();
	if($gio_hang)
	{
		foreach($gio_hang as $k=>$v)
		{
			$so_luong_moi=$_POST["soluong".$k];
			if($so_luong_moi!=$v)
			{
				$c_gio_hang->CapNhatGioHang($k,$so_luong_moi,$_POST["dongia".$k]);	
			}	
		}
	}
}

$c_gio_hang->Hien_thi_gio_hang();

?>