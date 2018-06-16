<?php
class C_lien_he
{
	public function Hien_thi_lien_he()
	{
		//models
			if(isset($_POST["btn_gui"]))
			{
				$ten=$_POST["ten"];
				$email=$_POST["email"];
				$sodienthoai=$_POST["so_dien_thoai"];
				$tieu_de=$_POST["tieu_de"];
				$noi_dung=$_POST["noi_dung"];
				$trang_thai=0;
				include("models/m_lien_he.php");
				$m_lien_he=new M_lien_he();
				$kq=$m_lien_he->Them_lien_he($ten,$email,$sodienthoai,$tieu_de,$noi_dung,$trang_thai);
				if($kq->rowCount()>0)  echo "Đã lưu vào csdl";

}
		
		//views
		
			$view="views/lien_he/v_lien_he.php";
			include("templates/layout.php");	
	}	
}
?>