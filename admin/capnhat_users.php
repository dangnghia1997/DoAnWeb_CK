<?php
//models
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("models/m_user.php");
	$m_user=new M_user();
	$user=$m_user->Doc_user_theo_id($id);
	
	if(isset($_POST['btn_cap_nhat_user']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$ho_ten=$_POST['ho_ten'];
		$so_dien_thoai=$_POST['so_dien_thoai'];
		$dia_chi=$_POST['dia_chi'];
		$quyen=$_POST['quyen'];
		
		if($email !="" && $password !="" && $ho_ten !="" && $so_dien_thoai!="" && $dia_chi!="")
		{
			
			$kq=$m_user->Cap_nhat_user_admin($id,$email,md5($password),$ho_ten,$so_dien_thoai,$dia_chi,$quyen);
			if($kq)
			{
				echo "<script>alert('Đã cập 1 tài khoản user');window.location='ds_users.php';</script>";
			}
			else
			{
				echo "<script>alert('Lỗi cập nhật tài khoản!')</script>";
			}
		}
		else
		{
			echo "<script>alert('Vui lòng điền đầy đủ thông tin bên dưới!')</script>";
		}
	}	
}


//views
$view="views/users/v_cap_nhat_users.php";
include("templates/layout.php");

?> 