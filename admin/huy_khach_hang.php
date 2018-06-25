<?php
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
?>