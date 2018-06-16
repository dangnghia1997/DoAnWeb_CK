<?php
@session_start();
//Xử lý đổi mật khẩu
if(isset($_POST["btn_submit_change_password"]))
{
   	$id=$_SESSION["id_user"];
	$current_password=$_POST["old_password"];
	$new_password=$_POST["new_password"];
	$confirm_new_password=$_POST["confirm_new_password"];
	
   	include("models/m_user.php");
	$m_user=new M_user();
	$kq=$m_user->Doc_user_theo_id($id);
	//echo "<pre>";
	//print_r($kq);
	if($kq[0]['password'] == md5($current_password))  //Nếu pass lấy từ form trùng với password csdl thì cho phép cập nhật lại mật khẩu
	{
		if($new_password == $confirm_new_password)  //Khi 2 pass khớp rồi mới lấy 1 trong 2 pass mã hóa md5 rồi cập nhật 
		{
			//echo " 2 pass khớp";
			$password_moi=md5($new_password);	
			$result=$m_user->Cap_nhat_user($id,$password_moi);
			if($result)
			{
				echo "<script>alert('Đổi mật khẩu thành công!');window.location='index.php';</script>";	
			}
		}
		else
		{
			echo "<script>alert('Mật khẩu xác nhận không trùng khớp!');window.location='index.php';</script>";	
		}	
	}
	else {
		echo "<script>alert('Mật khẩu hiện tại không đúng!');window.location='index.php';</script>";
	}
   
}
//End xử lý đổi mật khẩu


?>