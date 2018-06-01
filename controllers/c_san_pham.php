<?php
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		
		include("models/menudacap.php");
		

		$ds_tat_ca_san_pham="";
		
		include("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
			 


		if(isset($_GET['ma_loai']))
		{	
			 $ma_loai=$_GET['ma_loai'];
			 $loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
			 $danh_muc_hien_tai=$loai_san_pham->ten_loai;

			 
			 //sản phẩm
			 $ds_san_pham_theo_ma_loai=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
			 $ds_tat_ca_san_pham=$ds_san_pham_theo_ma_loai;
			 		 
		}
		else
		{
			$ds_tat_ca_san_pham=$m_san_pham->Doc_tat_ca_san_pham();	
		}
		
		//views
		$view="views/san_pham/v_san_pham.php";
		include("templates/layout.php");	
	}
}
?>