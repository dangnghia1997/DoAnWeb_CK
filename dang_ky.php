<?php
//Xử lý đăng ký
if(isset($_POST["btn_submit_signup"]))
{

	$email=$_POST["email_dang_ky"];
	$password=$_POST["password_dang_ky"];
	$ho_ten=$_POST["ho_ten_dang_ky"];
	$so_dien_thoai=$_POST["sdt_dang_ky"];
	$dia_chi=$_POST["dia_chi_dang_ky"];
	$quyen=0;
	include("models/m_user.php");
	$m_user=new M_user();
	$kq=$m_user->Them_user($email,md5($password),$ho_ten,$so_dien_thoai,$dia_chi,$quyen);
	if($kq)
	{
		echo "<script>window.location='index.php';alert('Chức mừng bạn - Tạo tài khoản thành công!');</script>";	
	}
	else
	{
		echo "<script>window.location='index.php';alert('Email đã được sử dụng để tạo khoản!');</script>";	
	}
		
}
//end xử lý đăng ký

?>