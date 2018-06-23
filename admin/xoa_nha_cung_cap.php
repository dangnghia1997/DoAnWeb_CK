<?php
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
?>