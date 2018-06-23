<?php

class M_user
{
	private $conn="";

	public function __construct()
	{
		$server_username = "root";
		$server_password = "";
		$server_host = "localhost";
		$database = 'thuc_pham_chuc_nang';
		$this->conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
		mysqli_query($this->conn,"SET NAMES 'UTF8'");	
	}
	public function Doc_tat_ca_user()
	{
		$sql="SELECT * FROM user";
		$result = mysqli_query($this->conn,$sql);
		
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
	}
	
	public function Doc_user_theo_id($id)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE id='$id'";
		$result = mysqli_query($this->conn,$sql);
		
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
			
	}
	

	public function Check_tai_khoan($email,$password)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE email='$email' and password='$password'"	;
		
		$result = mysqli_query($this->conn,$sql);
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	}
	
	public function Them_user($email,$password,$ten_day_du,$so_dien_thoai,$dia_chi,$quyen)
	{
		$sql = "INSERT INTO user(email, password, ten_day_du, so_dien_thoai, dia_chi,quyen) ";
		$sql.="VALUES('$email','$password','$ten_day_du','$so_dien_thoai','$dia_chi','$quyen')";
        $result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		else return 0;
	}
	
	
	public function Cap_nhat_user($id,$password_moi)
	{
		$sql="UPDATE user SET password='$password_moi' ";
		$sql.="WHERE id='$id'";
		$result = mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		else return 0;
			
	}
	
	public function Cap_nhat_user_admin($id,$email,$password,$ten_day_du,$so_dien_thoai,$dia_chi,$quyen)
	{
		$sql="UPDATE user SET email='$email',password='$password',ten_day_du='$ten_day_du',so_dien_thoai='$so_dien_thoai',dia_chi='$dia_chi',quyen='$quyen' ";
		$sql.="WHERE id='$id'";
		$result = mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		else return 0;
			
	}
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM user ";
		$sql.="WHERE id='$id'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}
}
?>