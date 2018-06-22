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
	
	public function Them_loai_san_pham()
	{
			//models
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham=new M_loai_san_pham();
			$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
			
			if(isset($_POST['btn_them_loai_san_pham']))
			{
				$ma_loai_cha=$_POST['ma_loai_cha'];
				if($ma_loai_cha==0) $ma_loai_cha=NULL;
				$ten_loai=$_POST['ten_san_pham_moi'];
				
				if($ten_loai !="")
				{
					$kq=$m_loai_san_pham->Them_loai_san_pham($ma_loai_cha,$ten_loai);
					if($kq)
					{
						echo "<script>alert('Thêm thành công!');window.location='ds_loai_san_pham.php'</script>";
					}
					else
					{
						echo "<script>alert('Lỗi thêm!')</script>";	
					}
				}
				else
				{
					echo "<script>alert('Vui lòng điền đầy đủ thông tin phía dưới!!')</script>";
				}
			}
			//views
			$view="views/loai_san_pham/v_them_loai_san_pham.php";
			include("templates/layout.php");
	}
	
	
	public function Cap_nhat_loai_san_pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		if(isset($_GET['ma_loai']))
		{
			$ma_loai=$_GET['ma_loai'];
			$loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
			if(isset($_POST['btn_sua_loai_san_pham']))
			{
				$ma_loai_cha=$_POST['ma_loai_cha'];
				if($ma_loai_cha==0) $ma_loai_cha=NULL;
				$ten_loai=$_POST['ten_san_pham_moi'];
				
				if($ten_loai !="")
				{
					$kq=$m_loai_san_pham->Cap_nhat_loai_san_pham($ma_loai,$ma_loai_cha,$ten_loai);
					if($kq)
					{
						echo "<script>alert('Cập nhật thành công!');window.location='ds_loai_san_pham.php'</script>";
					}
					else
					{
						echo "<script>alert('Lỗi cập nhật!')</script>";	
					}
				}
				else
				{
					echo "<script>alert('Vui lòng điền đầy đủ thông tin phía dưới!!')</script>";
				}
			}
		}
		
		
		//views
		$view="views/loai_san_pham/v_cap_nhat_loai_san_pham.php";
		include("templates/layout.php");	
	}
}
?>