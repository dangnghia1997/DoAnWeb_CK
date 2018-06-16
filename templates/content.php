<div class="main">
<!--noidung dang nhap-->
<div class="container">
  <!-- The Modal -->
  <!--Đăng nhập --->
  <div class="modal" id="myDangNhap">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng Nhập</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <form method="post" action=".">
        <div class="modal-body">
       
         	<div class="form-group">
              <label for="email_dang_nhap">Email:</label>
              <input type="email" class="form-control" id="email_dang_nhap" name="email_dang_nhap">
            </div>
            <div class="form-group">
              <label for="password_dang_nhap">Password:</label>
              <input type="password" class="form-control" id="password_dang_nhap" name="password_dang_nhap">
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger" name="btn_submit_login" >Đăng Nhập</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--ENd Đăng Nhập--->
  <!-- Đăng Kí-->
  <div class="modal" id="myDangkY">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng Ký</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form action="#" method="post">
         	<div class="form-group">
              <label for="email_dang_ky">Email:</label>
              <input type="email" class="form-control" id="email-dang_ky" name="email_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="password_dang_ky">Password:</label>
              <input type="password" class="form-control" id="password_dang_ky" name="password_dang_ky"/>
			</div>
            <div class="form-group">
              <label for="ho_ten_dang_ky">Họ tên:</label>
              <input type="text" class="form-control" id="ho_ten_dang_ky" name="ho_ten_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="sdt_dang_ky">Số điện thoại:</label>
              <input type="text" class="form-control" id="sdt_dang_ky" name="sdt_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="dia_chi_dang_ky">Địa chỉ:</label>
              <input type="text" class="form-control" id="dia_chi_dang_ky" name="dia_chi_dang_ky"/>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger"  name="btn_submit_signup">Đăng Ký</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Đăng Kí -->
  
  
  <!--Đổi mật khẩu--->
  <div class="modal" id="myDoiMatKhau">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đổi mật khẩu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <form method="post">
        <div class="modal-body">
       
         	<div class="form-group">
              <label for="email_dang_nhap">Email:</label>
              <input type="email" class="form-control" id="email_dang_nhap" name="email_dang_nhap">
            </div>
            <div class="form-group">
              <label for="old_password">Old password:</label>
              <input type="password" class="form-control" id="old_password" name="old_password">
			</div>
            <div class="form-group">
              <label for="new_password">New password:</label>
              <input type="password" class="form-control" id="new_password" name="new_password">
			</div>
            <div class="form-group">
              <label for="confirm_new_password">Confirm new password:</label>
              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password">
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger" name="btn_submit_change_password" >Đổi mật khẩu</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Đổi mật khẩu--->
</div>    

<?php
@session_start();
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
		echo "<script>alert('Chức mừng bạn - Tạo tài khoản thành công!')</script>";	
	}
	else
	{
		echo "<script>alert('Email đã được sử dụng để tạo khoản!')</script>";	
	}
		
}
//end xử lý đăng ký


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
			
		}
	}
		
}

//End xử lý đăng nhập
?>


<?php 
if(isset($view))
{
	include($view); 
}
?>
</div>