<?php
class C_quan_tri
{
	public function Hien_thi_Trang_Chu_quan_tri()
	{
		if(!isset($_SESSION['admin']['name']))
		{
			header('location:index.php');
		}
		else
		{
		//models
		include("models/m_khach_hang.php");
		$m_khach_hang=new M_khach_hang();
		$ds_khach_hang_da_thanh_toan=$m_khach_hang->Doc_nhung_khach_hang_da_thanh_toan();
		
		//Lấy  mã khách hàng rồi ghép thành chuỗi
		$chuoi="";
		foreach($ds_khach_hang_da_thanh_toan as $kh)
		{
			$chuoi.=$kh->ma_khach_hang.",";	
		}	
		
		$chuoi=substr($chuoi,0,strlen($chuoi)-1);
		// end  Lấy  mã khách hàng rồi ghép thành chuỗi
		
		$ds_thong_ke=$m_khach_hang->Thong_ke_tong_tien_theo_ngay_dat($chuoi);
		//views
		$view="views/trang_chu_admin/v_trang_chu_admin.php";
		include("templates/layout.php");
		}
		
	}//end 	Hien_thi_Trang_Chu_quan_tri()
}
?>