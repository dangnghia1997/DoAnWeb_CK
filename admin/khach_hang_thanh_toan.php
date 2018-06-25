<?php
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
?>