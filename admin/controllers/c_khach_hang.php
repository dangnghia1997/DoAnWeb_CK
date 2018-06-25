<?php
class C_khach_hang
{
	public function Hien_thi_DS_Khach_Hang()
	{
		//models
		include("models/m_khach_hang.php");
		$m_khach_hang=new M_khach_hang();
		$ds_khach_hang=$m_khach_hang->Doc_tat_ca_khach_hang();
		
		
		//views
		$view="views/khach_hang/v_ds_khach_hang.php";
		include("templates/layout.php");
		
	}//end 	Hien_thi_DS_Khach_Hang()
	
	
	public function Huy_khach_hang()
	{
		if(isset($_GET['ma_khach_hang']))
		{
			$ma_khach_hang=$_GET['ma_khach_hang'];	
			include("models/m_khach_hang.php");
			$m_khach_hang=new M_khach_hang();
			$xoa_khach_hang=$m_khach_hang->Xoa_khach_hang($ma_khach_hang);
			
			if($xoa_khach_hang)
			{
				include("models/m_don_hang.php");
				$m_don_hang=new M_don_hang();
				$don_hang=$m_don_hang->Doc_don_hang_theo_ma_khach_hang($ma_khach_hang);
				$ma_don_hang=$don_hang->ma_don_hang;
				$xoa_don_hang=$m_don_hang->Xoa_don_hang($ma_don_hang);
				if($xoa_don_hang)
				{
					$xoa_ct_don_hang=$m_don_hang->Xoa_ct_don_hang($ma_don_hang);
					if($xoa_ct_don_hang)
					{
						echo "<script>alert('Đã xóa 1 Khách hàng!');window.location='ds_khach_hang.php'</script>";	
					}	
				}
			}
			else
			{
				echo "<script>alert('Lỗi xóa Khách hàng!');window.location='ds_khach_hang'</script>";	
			}
		
			
		}
	}//end Huy_khach_hang()
	
	
	public function Thanh_toan_don_hang_cua_Khach_hang()
	{
		if(isset($_GET['ma_khach_hang']))
		{
			$ma_khach_hang=$_GET['ma_khach_hang'];
			include("models/m_khach_hang.php");
			$m_khach_hang=new M_khach_hang();
			$khach_hang=$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
			
			$kq=$m_khach_hang->Cap_nhat_khach_hang($ma_khach_hang,$khach_hang->ten_khach_hang,$khach_hang->email,$khach_hang->dia_chi,$khach_hang->so_dien_thoai,$khach_hang->ghi_chu,1,$khach_hang->thanh_vien);
			if($kq)
			{
				echo "<script>alert('Đã Thanh Toán!');window.location='ds_khach_hang.php'</script>";	
			}
			else
			{
				echo "<script>alert('Lỗi thanh toán!');window.location='ds_khach_hang.php'</script>";	
			}
		}	
	}//end Thanh_toan_don_hang_cua_Khach_hang()
}
?>