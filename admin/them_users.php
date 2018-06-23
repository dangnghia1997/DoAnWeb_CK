<?php
//models
if(isset($_POST['btn_them_user']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$ho_ten=$_POST['ho_ten'];
	$so_dien_thoai=$_POST['so_dien_thoai'];
	$dia_chi=$_POST['dia_chi'];
	$quyen=$_POST['quyen'];
	
	if($email !="" && $password !="" && $ho_ten !="" && $so_dien_thoai!="" && $dia_chi!="")
	{
		include("models/m_user.php");
		$m_user=new M_user();
		$kq=$m_user->Them_user($email,md5($password),$ho_ten,$so_dien_thoai,$dia_chi,$quyen);
		if($kq)
		{
			echo "<script>alert('Đã thêm 1 tài khoản user');window.location='ds_users.php';</script>";
		}
		else
		{
			echo "<script>alert('Lỗi thêm tài khoản!')</script>";
		}
	}
	else
	{
		echo "<script>alert('Vui lòng điền đầy đủ thông tin bên dưới!')</script>";
	}
	
}



//views
$view="views/users/v_them_users.php";
include("templates/layout.php");
?>