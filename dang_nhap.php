<?php
@session_start();
//Xử lý đăng nhập
if(isset($_POST["btn_submit_login"]))
{
	$email_dang_nhap=$_POST["email_dang_nhap"];
	$password_dang_nhap=$_POST["password_dang_nhap"];
	
	//echo $email_dang_nhap."  ".$password_dang_nhap."<br>";
	include("models/m_user.php");
	$m_user=new M_user();
	$kq=$m_user->Check_tai_khoan($email_dang_nhap,md5($password_dang_nhap));
	
	if(count($kq)==1)
	{	
		if(isset($_SESSION['username'])==false)
		{
			$_SESSION['username']=$kq[0]['ten_day_du'];
			$_SESSION['id_user']=$kq[0]['id'];
			
		}
	}
	else
	{
		echo "<script>alert('Email hoặc mật khẩu không đúng!');window.location='index.php';</script>";	
	}
		
}
//End xử lý đăng nhập

?>