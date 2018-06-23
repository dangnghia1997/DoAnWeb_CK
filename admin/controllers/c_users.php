<?php
class C_users
{
	public function Hien_thi_Users()
	{
		//models
		include("models/m_user.php");
		$m_user=new M_user();
		$ds_user=$m_user->Doc_tat_ca_user();
		
		//views
		$view="views/users/v_ds_users.php";
		include("templates/layout.php");	
	}
	
	
	public function Them_User()
	{
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
	}
	
	
	public function Xoa_user()
	{
		//models
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
	}
}
?>