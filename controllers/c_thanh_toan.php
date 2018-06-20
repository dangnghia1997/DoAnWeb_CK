<?php
class C_thanh_toan
{
	public function Hien_thi_thanh_toan()
	{
		//models
			include("models/m_tinh_thanh.php");
			$m_tinh_thanh=new M_tinh_thanh();
			$ds_tinh_thanh=$m_tinh_thanh->Doc_tat_ca_tinh_thanh();
			
			
			include("controllers/c_gio_hang.php");
			$c_gio_hang=new C_gio_hang();
			$gio_hang=$c_gio_hang->GetGioHang();
			if($gio_hang)
			{
				$ds_tt_gio_hang=$c_gio_hang->Lay_thong_tin_gio_hang($gio_hang);
			}
			
			echo "<pre>";
			print_r($ds_tt_gio_hang);
			echo "</pre>";
			
			include("models/m_khach_hang.php");
			$m_khach_hang=new M_khach_hang();
		//views
			$view="views/thanh_toan/v_thanh_toan.php";
			include("templates/layout.php");	
	}
}
?>