<?php
class C_user
{
	//Xử lý đăng ký
	public function Dang_ky()
	{
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
	}
	//end xử lý đăng ký
	
	//Xử lý đăng nhập
	public function Dang_nhap()
	{
			
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
					header("location:index.php");
					
				}
			}
			else
			{
				echo "<script>alert('Email hoặc mật khẩu không đúng!');window.location='index.php';</script>";	
			}
				
		}
	}
	//End xử lý đăng nhập
	
	//Xử lý đổi mật khẩu
	public function Doi_mat_khau()
	{		
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
	}
	//End xử lý đổi mật khẩu
	
	//Xử lý Đăng Xuất
	public function Dang_xuat()
	{
		unset($_SESSION["username"]);
		unset($_SESSION['id_user']);
		header('location:index.php');	
	}
	//End Xử lý Đăng Xuất
}
?>