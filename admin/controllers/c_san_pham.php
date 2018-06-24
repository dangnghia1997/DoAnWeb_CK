<?php
class C_san_pham
{
	public function Hien_thi_DS_san_pham()
	{
		//models
		include("models/m_san_pham.php");
		include("models/phan_trang.php");
		$m_san_pham=new M_san_pham();
		$ds_san_pham=$m_san_pham->Doc_tat_ca_san_pham();
		/*****phân trang***********/
		$pager=new pager();
		$count=count($ds_san_pham);
		$limit = 10;
		$curpage=1;
		if(isset($_GET['page'])) $curpage=$_GET['page'];
		$vt=$pager->findStart($limit);
		$pages=$pager->findPages($count,$limit);
		$phan_trang=$pager->pageList($curpage,$pages);
		$ds_san_pham=$m_san_pham->Doc_tat_ca_san_pham($vt,$limit);
		
		/******END--PHÂN TRANG***********/
		//views
		$view="views/san_pham/v_ds_san_pham.php";
		include("templates/layout.php");
	}//end 	Hien_thi_DS_san_pham()
	
	
	
	public function Them_San_Pham()
	{
		//Models
		include("models/m_loai_san_pham.php");
		include("models/m_nha_cung_cap.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$m_nha_cung_cap=new M_nha_cung_cap();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		$ds_nha_cung_cap=$m_nha_cung_cap->Doc_tat_ca_nha_cung_cap();
		
		if(isset($_POST['btn_them_san_pham']))
		{
			$ma_loai=$_POST['ma_loai_san_pham'];
			$ma_nha_cung_cap=$_POST['ma_nha_cung_cap'];
			$ten_san_pham=$_POST['ten_san_pham_moi'];
			$don_gia=$_POST['don_gia'];
			$mo_ta=$_POST['mo_ta'];
			$file=$_FILES['hinh'];
			$hinh=$file['name'];
			$tmp_name=$file['tmp_name'];
			$error=$file['error'];
			
			if($ma_loai !="" && $ma_nha_cung_cap !="" && $ten_san_pham!="" && $don_gia!="" && $error==0)
			{
				include("models/m_san_pham.php");
				$m_san_pham=new M_san_pham();
				$kq=$m_san_pham->Them_san_pham($ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta);
				if($kq)
				{
					move_uploaded_file($tmp_name,"../public/layout/images/$hinh");
					echo "<script>alert('Thêm 1 sản phẩm thành công!');window.location='ds_san_pham.php'</script>";
				}
				else
				{
					echo "<script>alert('Lỗi thêm sản phẩm!');window.location='ds_san_pham.php';</script>";	
				}
			}
			else
			{
				echo "<script>alert('Vui lòng điền đầy đủ thông tin và chọn ảnh!')</script>";	
			}
			
		}
		//Views
		$view="views/san_pham/v_them_san_pham.php";
		include("templates/layout.php");
	}//end Them_San_Pham()
	
	
	
	public function Cap_nhat_San_Pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		include("models/m_nha_cung_cap.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$m_nha_cung_cap=new M_nha_cung_cap();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		$ds_nha_cung_cap=$m_nha_cung_cap->Doc_tat_ca_nha_cung_cap();
		
		if(isset($_GET['ma_san_pham']))
		{
			$ma_san_pham=$_GET['ma_san_pham'];
			include("models/m_san_pham.php");
			$m_san_pham=new M_san_pham();
			$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
			$hinh_cu=$san_pham->hinh;
			
			if(isset($_POST['btn_cap_nhat_san_pham']))
			{
				$ma_loai=$_POST['ma_loai_san_pham'];
				$ma_nha_cung_cap=$_POST['ma_nha_cung_cap'];
				$ten_san_pham=$_POST['ten_san_pham_moi'];
				$don_gia=$_POST['don_gia'];
				$mo_ta=$_POST['mo_ta'];
				$file=$_FILES['hinh'];
				$hinh=$file['name'];
				$tmp_name=$file['tmp_name'];
				$error=$file['error'];
				
				
				if($ma_loai !="" && $ma_nha_cung_cap !="" && $ten_san_pham!="" && $don_gia!="" && $error==0)
				{
					
					$kq=$m_san_pham->Cap_nhat_san_pham($ma_san_pham,$ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta);
					if($kq)
					{
						move_uploaded_file($tmp_name,"../public/layout/images/$hinh");
						unlink("../public/layout/images/$hinh_cu");
						echo "<script>alert('Cập nhật 1 sản phẩm thành công!');window.location='ds_san_pham.php'</script>";
					}
					else
					{
						echo "<script>alert('Lỗi cập nhật sản phẩm!');window.location='ds_san_pham.php';</script>";	
					}
				}
				else
				{
					echo "<script>alert('Vui lòng điền đầy đủ thông tin và chọn ảnh!')</script>";	
				}
				
			}//end 	if(isset($_POST['btn_cap_nhat_san_pham']))
			
			
		}//end if(isset($_GET['ma_san_pham']))
		
		
		//views
		$view="views/san_pham/v_cap_nhat_san_pham.php";
		include("templates/layout.php");		
	}//end Cap_nhat_San_Pham()
	
	
	
	public function Xoa_san_pham()
	{
		//models
		if(isset($_GET['ma_san_pham']))
		{
			$ma_san_pham=$_GET['ma_san_pham'];
			include("models/m_san_pham.php");
			$m_san_pham=new M_san_pham();
			$san_pham=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
			$hinh=$san_pham->hinh;
			$kq=$m_san_pham->Xoa_san_pham($ma_san_pham);
			if($kq)
			{
				unlink("../public/layout/images/$hinh");
				echo "<script>alert('Xóa 1 sản phẩm');window.location='ds_san_pham.php';</script>";
			}
			else
			{
				echo "<script>alert('Lỗi Xóa!');window.location='ds_san_pham.php';</script>";	
			}
		}
	}//end Xoa_san_pham()
}
?>