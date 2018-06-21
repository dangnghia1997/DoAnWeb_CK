<?php
class C_thanh_toan
{
	public function Hien_thi_thanh_toan()
	{
		//models
		
			date_default_timezone_set("Asia/Bangkok");
			include("models/m_tinh_thanh.php");
			$m_tinh_thanh=new M_tinh_thanh();
			$ds_tinh_thanh=$m_tinh_thanh->Doc_tat_ca_tinh_thanh();
			
			
			include("controllers/c_gio_hang.php");
			$c_gio_hang=new C_gio_hang();
			$gio_hang=$c_gio_hang->GetGioHang();
			if($gio_hang)
			{
				$ds_tt_gio_hang=$c_gio_hang->Lay_thong_tin_gio_hang($gio_hang);
			}
			
			//echo "<pre>";
			//print_r($ds_tt_gio_hang);
			//echo "<hr>";
			//print_r($_SESSION['gio_hang']);
			//echo "</pre>";
			
			if(isset($_POST['btn_thanh_toan']))
			{
				
				//////Lấy thông tin từ form đặt hàng/////////
				$ho_ten=$_POST['ho_ten_dh'];
				$email=$_POST['email_dh'];
				$sdt=$_POST['sdt_dh'];
				$dia_chi=$_POST['dia_chi_dh'];
				
				$ma_tinh_thanh=$_POST['tinh_thanh_dh'];
				
				$quan_huyen=$_POST['quan_huyen_dh'];
				$ghi_chu=$_POST['ghi_chu_dh'];
				$hinh_thuc=$_POST['hinh_thuc_dh'];
				
				
				
				$thanh_vien=0;// 0:chưa là thành vien( chưa tài khoản). 1:là thành viên(có tài khoản)
				$trang_thai=0; // Chưa thanh toán
				
				
				if($ho_ten!="" && $email!="" && $dia_chi!="" && $sdt!="" && $ma_tinh_thanh!="")
				{
					//nối chuối địa chỉ
					$tinh_thanh=$m_tinh_thanh->Doc_tinh_thanh_theo_id_tinh_thanh($ma_tinh_thanh);
					$dia_chi.=",".$quan_huyen.",".$tinh_thanh->ten_tinh_thanh;
					
					include("models/m_khach_hang.php");
					$m_khach_hang=new M_khach_hang();
					
					if(isset($_SESSION['gio_hang']))
					{
						$last_id_khach_hang=$m_khach_hang->Them_khach_hang($ho_ten,$email,$dia_chi,$sdt,$ghi_chu,$trang_thai,$thanh_vien); ////thêm khách hàng trả về id cuối
						if($last_id_khach_hang!= false)
						{
							//Thêm đơn hàng
							$ngay_dat=date('Y-m-d');
							$tong_tien=$_SESSION['thanh_tien'];
							$last_id_don_hang=$m_khach_hang->Them_don_hang($last_id_khach_hang,$ngay_dat,$hinh_thuc,$tong_tien);
							//echo "Đã thêm đơn hàng";
							//echo $last_id_don_hang;
							if($last_id_don_hang!=false)
							{
								foreach($_SESSION['gio_hang'] as $ma_san_pham=>$so_luong)
								{
									$m_khach_hang->Them_chi_tiet_don_hang($last_id_don_hang,$ma_san_pham,$so_luong)	;
									//echo "đã thêm chi tiết<br>";
									
								}	
								$c_gio_hang->Xoa_gio_hang();
								echo "<script>alert('Đặt hàng thành công!')</script>";
							}//end if($last_id_don_hang!=false)
						
						}// end if( $last_id_khach_hang!= false)
					}//end if(isset($_SESSION['gio_hang']))
					else
					{
						echo "Không có sản phẩm trong giỏ hàng!";	
					}
				} //end if check null
				else
				{
					echo "<script>alert('Vui lòng điền đầy đủ thông tin đặt hàng');</script>";
				}
					
			}
			
		
			
		//views
			$view="views/thanh_toan/v_thanh_toan.php";
			include("templates/layout.php");	
	}
}
?>