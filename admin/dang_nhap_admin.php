<?php
session_start();

if(isset($_POST['btn_dang_nhap_admin']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];	
	include("models/m_user.php");
	$m_user=new M_user();
	$arr_quyen=array(1,2);  //1:admin, 2:nhân viên
	foreach($arr_quyen as $quyen)
	{
		$kq=$m_user->Check_tai_khoan($email,md5($pass), $quyen);
		if(count($kq)==1) break;	
	}
	
	if(count($kq)==1)
	{
		if(isset($_SESSION['admin']['name'])==false)
		{
			$_SESSION['admin']['name']=$kq[0]['ten_day_du'];
			$_SESSION['admin']['id']=$kq[0]['id'];
			$_SESSION['admin']['lv']=$kq[0]['quyen'];
			header('location:index_quan_tri.php');
		}
	
	}
	else
	{
		echo "<script>alert('Email hoặc mật khẩu không đúng!');window.location='index.php';</script>";	
	}
	
	
	
	 
	
}
?>