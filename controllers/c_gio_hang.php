<?php
@session_start();
class C_gio_hang
{
	public function Hien_thi_gio_hang()
	{
		//models

		$gio_hang=$this->Lay_gio_hang();
		
		$ds_tt_gio_hang=$this->Lay_thong_tin_gio_hang($gio_hang);
		
		//echo "<pre>";
		//print_r($ds_tt_gio_hang);
		
		//views
			$view="views/gio_hang/v_gio_hang.php";
			include("templates/layout.php");
	}
	
	
	public function Lay_thong_tin_gio_hang($gio_hang)
	{
		$arr_ma_san_pham=array();
		foreach($gio_hang as $key=>$value)
		{
			$arr_ma_san_pham[]=$key;	
		}
		
		$chuoi_ma_san_pham=implode(",",$arr_ma_san_pham);
		
		include("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
		$ds_san_pham=$m_san_pham->LayThongTinSanPhamChoGioHang($chuoi_ma_san_pham);
		$ds_sp_gio_hang=array();
		foreach($ds_san_pham as $sp)
		{
			$sp->soluong=$gio_hang[$sp->ma_san_pham];
			$ds_sp_gio_hang[]=$sp;
		}
		
		return $ds_sp_gio_hang;
	}
	
	
	
	public function Them_gio_hang($ma_san_pham,$don_gia,$so_luong)
	{		if($so_luong>0)
			{
				if(isset($_SESSION["gio_hang"][$ma_san_pham]))
				{
					$_SESSION["thanh_tien"]-=$_SESSION["gio_hang"][$ma_san_pham]*$don_gia;
					$_SESSION["so_luong"]-=	$_SESSION["gio_hang"][$ma_san_pham];
				}
				
				$_SESSION["gio_hang"][$ma_san_pham]=$so_luong;
				
				if(isset($_SESSION["thanh_tien"]))
				{
					$_SESSION["thanh_tien"]=$_SESSION["thanh_tien"]+$so_luong*$don_gia;
					$_SESSION["so_luong"]=$_SESSION["so_luong"]+$so_luong;
				}
				else
				{
					$_SESSION["thanh_tien"]=$so_luong*$don_gia;
					$_SESSION["so_luong"]=$so_luong;
				}
			}
	}
	
	
	public function CapNhatGioHang($ma_san_pham,$so_luong,$don_gia)
	{
		if($so_luong>0)
		{
			$_SESSION["thanh_tien"]-=$_SESSION["gio_hang"][$ma_san_pham] * $don_gia;
			$_SESSION["thanh_tien"]+=$so_luong*$don_gia;
			
			$_SESSION["so_luong"]-=$_SESSION["gio_hang"][$ma_san_pham];
			$_SESSION["so_luong"]+=$so_luong;
			
			
		}	
	}
	
	public function Lay_gio_hang()
	{
		if(isset($_SESSION["gio_hang"]))
			return $_SESSION["gio_hang"];
		else
			return false;
	}
	
	public function GetSoLuong()
	{
		if(isset($_SESSION["so_luong"]))
			return $_SESSION["so_luong"];
		else
			return 0;		
	}
	
	public function GetThanhTien()
	{
		if(isset($_SESSION["thanh_tien"]))
			return $_SESSION["thanh_tien"];
		else
			return 0;	
	}
	
	public function GetGioHang()
	{
		if(isset($_SESSION["gio_hang"]))
			return $_SESSION["gio_hang"];
		else
			return false;	
	}	
}
?>