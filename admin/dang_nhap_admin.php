<?php
session_start();

if(isset($_POST['btn_dang_nhap_admin']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];	
	include("models/m_user.php");
	$m_user=new M_user();
	$kq=$m_user->Check_tai_khoan($email,md5($pass),2); // là admin
	if(count($kq)==1)
	{
		if(isset($_SESSION['admin']['name'])==false)
		{
			$_SESSION['admin']['name']=$kq[0]['ten_day_du'];
			$_SESSION['admin']['id']=$kq[0]['id'];
			header('location:index_quan_tri.php');
		}
	
	}
	else
	{
		echo "<script>alert('Email hoặc mật khẩu không đúng!');window.location='index.php';</script>";	
	}
}
?>