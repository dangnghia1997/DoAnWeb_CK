<?php
class C_trang_chu
{
	public function Hien_Thi_Trang_Chu()
	{
		//models
			include("models/m_trang_chu.php");
			include("models/m_san_pham.php");
			
			$m_trang_chu=new M_Trang_Chu();
			$danh_sach_nha_cung_cap=$m_trang_chu->Doc_tat_ca_nha_cung_cap();
			
			
			$m_san_pham=new M_san_pham();
			$ds_san_pham_top_ban_chay=$m_san_pham->Doc_tat_ca_san_pham(0,3);
			$ds_san_pham_top_moi=$m_san_pham->Doc_tat_ca_san_pham(5,3);
			$ds_san_pham_xem_gan_day=$m_san_pham->Doc_tat_ca_san_pham(10,3);
			$ds_san_pham_HOT=$m_san_pham->Doc_tat_ca_san_pham(77,15);
			
			
		//views
			$view="views/trang_chu/v_trang_chu.php";
			include("templates/layout.php");
	}
}
?>