<?php
//models
if(isset($_POST['btn_them_nha_cung_cap']))
{
	$ten_nha_cung_cap=$_POST['ten_nha_cung_cap'];
	$file=$_FILES['hinh'];	
	$file_name=$file["name"];
	$tmp_name=$file["tmp_name"];
	$error=$file["error"];
	if($ten_nha_cung_cap != "" && $error == 0 )//nếu có chọn ảnh, không chọn error>0
	{
		include("models/m_nha_cung_cap.php");
		$m_nha_cung_cap=new M_nha_cung_cap();
		$kq=$m_nha_cung_cap->Them_nha_cung_cap($ten_nha_cung_cap,$file_name);
		if($kq)
		{ 
			move_uploaded_file($tmp_name,"../public/layout/images/nha_cung_cap/$file_name");//dời đg dẫn tamp của ảnh load vào thư mục chứa ảnh ở database
			echo "<script>alert('Thêm thành công!');window.location='ds_nha_cung_cap.php'</script>";
		}
		else
		{
			echo "<script>alert('Lỗi thêm nhà cung cấp!')</script>";	
		}
		
	}
	else
	{
		echo "<script>alert('Vui lòng điền đầy đủ và chọn file ảnh!')</script>";	
	}
	
}


//views
$view="views/nha_cung_cap/v_them_nha_cung_cap.php";
include("templates/layout.php");
?>