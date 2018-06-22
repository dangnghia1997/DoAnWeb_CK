<?php
class C_loai_san_pham
{
	public function Hien_Thi_DS_Loai_San_Pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		
		
		//views
		$view="views/loai_san_pham/v_ds_loai_san_pham.php";
		include("templates/layout.php");	
	}
	
	
	public function Xoa_loai_san_pham()
	{
		//models
		if(isset($_GET['ma_loai']))
		{
			$ma_loai=$_GET['ma_loai'];
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$kq=$m_loai_san_pham->Xoa_loai_san_pham($ma_loai);
			if($kq)
			{
				echo "<script>alert('Đã xóa 1 loại sản phẩm!!');window.location='ds_loai_san_pham.php';</script>";
			}
		}
	}
}
?>