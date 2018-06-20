<?php
class C_chi_tiet_san_pham
{
	public function Hien_thi_chi_tiet_san_pham()
	{
		//models
			include("models/m_san_pham.php");
			include("models/m_loai_san_pham.php");
			$m_san_pham=new M_san_pham();
			$m_loai_san_pham=new M_loai_san_pham();
			if(isset($_GET["ma_san_pham"]))
			{
				//sản phẩm
				$ma_san_pham=$_GET["ma_san_pham"];
				$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
				//danh mục
				$ma_loai=$san_pham->ma_loai;
				$loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
				//sản phẩm khác
				$ngoai_tru=$ma_san_pham;
				$san_pham_khac=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai,$ngoai_tru);
			}
		
		//views
			$view="views/chi_tiet_san_pham/v_chi_tiet_san_pham.php";
			include("templates/layout.php");	
	}	
}

?> 