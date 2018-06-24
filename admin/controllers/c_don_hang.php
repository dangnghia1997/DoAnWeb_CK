<?php
class C_don_hang
{
	public function Hien_thi_DS_Don_hang()
	{
		//models
		include("models/m_don_hang.php");
		$m_don_hang=new M_don_hang();
		$ds_don_hang=$m_don_hang->Doc_tat_ca_don_hang();
		
		
		//views
		$view="views/don_hang/v_ds_don_hang.php";
		include("templates/layout.php");
		
	}//end Hien_thi_DS_Don_hang()
	
	
	
	public function Hien_thi_chi_tiet_don_hang()
	{
		//models
		if(isset($_GET['ma_don_hang']))
		{
			$ma_don_hang=$_GET['ma_don_hang'];
			include("models/m_don_hang.php");
			$m_don_hang=new M_don_hang();
			$ct_don_hang=$m_don_hang->Doc_ct_don_hang_theo_ma_don_hang($ma_don_hang);
			
			include("models/m_san_pham.php");
			$m_san_pham=new M_san_pham();
		}
		
		//views
		$view="views/don_hang/v_chi_tiet_don_hang.php";
		include("templates/layout.php");
			
	}//end Hien_thi_chi_tiet_don_hang()
}
?>