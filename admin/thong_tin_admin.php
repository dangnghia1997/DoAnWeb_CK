<?php
session_start();

//models
include("models/m_user.php");
$m_user=new M_user();
$user=$m_user->Doc_user_theo_id($_SESSION['admin']['id']);
if(isset($_POST['btn_luu_tt_admin']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$ho_ten=$_POST['ho_ten'];
	$so_dien_thoai=$_POST['so_dien_thoai'];	
	$dia_chi=$_POST['dia_chi'];
	
	if($email != "" && $pass != "" && $ho_ten != "" && $so_dien_thoai !="" && $dia_chi != "" )
	{
		$kq=$m_user->Cap_nhat_user_admin($user[0]['id'],$email,md5($pass),$ho_ten,$so_dien_thoai,$dia_chi,2);
		if($kq)
		{
			$_SESSION['admin']['name']=$ho_ten;
			echo "<script>alert('Thay đổi thông tin thành công!');window.location='ds_users.php'</script>";	
		}
		else
		{
			echo "<script>alert('Lỗi thay đổi thông tin!');window.location='ds_users.php'</script>";	
		}
	}
	else
	{
		echo "<script>alert('Vui lòng điền đầy đủ thông tin nhé, Admin!');</script>";	
	}
}

//views
$view="views/admin_user/v_thong_tin_admin.php";
include("templates/layout.php");
?>