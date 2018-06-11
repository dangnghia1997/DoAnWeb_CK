<?php
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		include("models/menudacap.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		
		$ds_tat_ca_san_pham=""; //mảng dùng để hiện thị
		
		include("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
			 


		if(isset($_GET['ma_loai']))
		{	
			 $ma_loai=$_GET['ma_loai'];
			 $loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
			 $danh_muc_hien_tai=$loai_san_pham->ten_loai;

			 
			 //sản phẩm
			 $ds_san_pham_theo_ma_loai=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai);
			 
			 	//lấy mảng các ma_loai là cha
				$arr_obj_ma_loai_cha=$m_loai_san_pham->Lay_ma_loai_cha();
				$arr_ma_loai_cha=array();
				foreach($arr_obj_ma_loai_cha as $t)
				{
					$arr_ma_loai_cha[]=$t->ma_loai_cha;	  // Gắn append ma_loai_cha vào mảng 														
				}										//$arr_ma_loai_cha
				//end lấy mảng
			 
			 if(in_array($ma_loai,$arr_ma_loai_cha)) //kiểm tra, nếu ma_loai thuộc mảng cha
			 {
				$mang_ma_loai_con=Lay_mang_ma_san_pham_theo_ma_loai($arr_ma_loai_cha,$ma_loai);
				$mang_tam=array();
				
				
				foreach($mang_ma_loai_con as $ma_loai_con)
				{
					$mang_tam[]=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai_con);	
				}
				$mang_ds_san_pham=array();
				foreach($mang_tam as $tam)
				{
					foreach($tam as $t)
					{
						$mang_ds_san_pham[]=$t;	  //gán từng đối tạo vào 1 mảng riêng
					}
				}
				
				$ds_san_pham_theo_ma_loai=$mang_ds_san_pham;	  //gán mảng riêng vừa tạo cho $ds_san_pham_theo_ma_loai (mảng chung).
			 }
			 
			  
			 
			 $ds_tat_ca_san_pham=$ds_san_pham_theo_ma_loai;
			 		 
		}
		else
		{
			$ds_tat_ca_san_pham=$m_san_pham->Doc_tat_ca_san_pham();	
		}
		
		
		//views
		$view="views/san_pham/v_san_pham.php";
		include("templates/layout.php");	
	}
}
?>