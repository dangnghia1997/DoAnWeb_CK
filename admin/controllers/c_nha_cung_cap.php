<?php
class C_nha_cung_cap
{
	public function Hien_thi_DS_Nha_cung_cap()
	{
		//models
		include("models/m_nha_cung_cap.php");
		$m_nha_cung_cap=new M_nha_cung_cap();
		$ds_nha_cung_cap=$m_nha_cung_cap->Doc_tat_ca_nha_cung_cap();
		
		
		//views
		$view="views/nha_cung_cap/v_ds_nha_cung_cap.php";
		include("templates/layout.php");	
	}
	
	public function Them_nha_cung_cap()
	{
		//models
		if(isset($_POST['btn_them_nha_cung_cap']))
		{
			$ten_nha_cung_cap=$_POST['ten_nha_cung_cap'];
			$file=$_FILES['hinh'];	
			$file_name=$file["name"];
			$tmp_name=$file["tmp_name"];
			$error=$file["error"];
			if($ten_nha_cung_cap != "" && $error == 0 )//nếu có chọn ảnh, không chọn error>0
			{
				include("models/m_nha_cung_cap.php");
				$m_nha_cung_cap=new M_nha_cung_cap();
				$kq=$m_nha_cung_cap->Them_nha_cung_cap($ten_nha_cung_cap,$file_name);
				if($kq)
				{ 
					move_uploaded_file($tmp_name,"../public/layout/images/nha_cung_cap/$file_name");//dời đg dẫn tamp của ảnh load vào thư mục chứa ảnh ở database
					echo "<script>alert('Thêm thành công!');window.location='ds_nha_cung_cap.php'</script>";
				}
				else
				{
					echo "<script>alert('Lỗi thêm nhà cung cấp!')</script>";	
				}
				
			}
			else
			{
				echo "<script>alert('Vui lòng điền đầy đủ và chọn file ảnh!')</script>";	
			}
			
		}
		
		
		//views
		$view="views/nha_cung_cap/v_them_nha_cung_cap.php";
		include("templates/layout.php");	
	}
	
	public function Cap_nhat_nha_cung_cap()
	{
		//models
		if(isset($_GET['ma_nha_cung_cap']))
		{
			$ma_nha_cung_cap=$_GET['ma_nha_cung_cap'];
			include("models/m_nha_cung_cap.php");
			$m_nha_cung_cap=new M_nha_cung_cap();
			$nha_cung_cap=$m_nha_cung_cap->Doc_nha_cung_cap_theo_ma_nha_cung_cap($ma_nha_cung_cap);
			$hinh_cu=$nha_cung_cap->hinh;
			
			if(isset($_POST['btn_cap_nhat_nha_cung_cap']))
			{
				$ten_nha_cung_cap=$_POST['ten_nha_cung_cap'];
				$file=$_FILES['hinh'];	
				$file_name=$file["name"];
				$tmp_name=$file["tmp_name"];
				$error=$file["error"];
				if($ten_nha_cung_cap != "" && $error == 0 )//nếu có chọn ảnh, không chọn error>0
				{	
					$kq=$m_nha_cung_cap->Cap_nhat_nha_cung_cap($ma_nha_cung_cap,$ten_nha_cung_cap,$file_name);
					if($kq)
					{ 
						move_uploaded_file($tmp_name,"../public/layout/images/nha_cung_cap/$file_name");//dời đg dẫn tamp của ảnh load vào thư mục chứa ảnh ở database
						
						//Xóa file ảnh ở đường dẫn cũ
						unlink("../public/layout/images/nha_cung_cap/$hinh_cu");
						echo "<script>alert('Cập nhật thành công!');window.location='ds_nha_cung_cap.php'</script>";
					}
					else
					{
						echo "<script>alert('Lỗi cập nhật nhà cung cấp!')</script>";	
					}
					
				}
				else
				{
					echo "<script>alert('Vui lòng điền đầy đủ và chọn file ảnh!')</script>";	
				}
					
			}
		}
		
		
		//views
		$view="views/nha_cung_cap/v_cap_nhat_nha_cung_cap.php";
		include("templates/layout.php");	
	}//end function
	
	
	
	
	
	public function Xoa_nha_cung_cap()
	{
		if(isset($_GET['ma_nha_cung_cap']))
		{
			$ma_nha_cung_cap=$_GET['ma_nha_cung_cap'];
			include("models/m_nha_cung_cap.php");
			$m_nha_cung_cap=new M_nha_cung_cap();
			$nha_cung_cap=$m_nha_cung_cap->Doc_nha_cung_cap_theo_ma_nha_cung_cap($ma_nha_cung_cap);
			
			
			$kq=$m_nha_cung_cap->Xoa_nha_cung_cap($ma_nha_cung_cap);
			if($kq)
			{
				unlink("../public/layout/images/nha_cung_cap/$nha_cung_cap->hinh");//đường dẫn và ảnh
				echo "<script>alert('Đã xóa 1 nhà cung cấp!');window.location='ds_nha_cung_cap.php'</script>";
			}
			else
			{
				echo "<script>alert('Lỗi xóa!');window.location='ds_nha_cung_cap.php'</script>";	
			}
		}	
	}
}
?>