<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("models/m_user.php");
	$m_user=new M_user();
	$kq=$m_user->Xoa_user($id);
	if($kq)
	{
		echo "<script>alert('Đã xóa 1 user!'); window.location='ds_users.php';</script>";
	}
	else
	{
		echo "<script>alert('Lỗi xóa user');window.location='ds_user.php'</script>";	
	}	
}
?>