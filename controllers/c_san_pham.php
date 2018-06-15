<?php
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		//models
		include("models/m_loai_san_pham.php");
		include("models/menudacap.php");
		include("models/phan_trang.php");
		$m_loai_san_pham=new M_loai_san_pham();
		$ds_loai_san_pham=$m_loai_san_pham->Doc_tat_ca_loai_san_pham();
		
		$ds_tat_ca_san_pham=""; //mảng dùng để hiện thị
		
		include("models/m_san_pham.php");
		$m_san_pham=new M_san_pham();
			 
		//phan trang
		$limit=8;
		$pager=new pager();
		$pages="";
		$curpage=1;
		if(isset($_GET["page"])) $curpage=$_GET["page"];
		$phan_trang="";
		//
		if(isset($_GET['ma_loai']))
		{	/*******----Loại Sản phẩm-----************************************************************/
			 $ma_loai=$_GET['ma_loai'];
			 $loai_san_pham=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
			 $danh_muc_hien_tai=$loai_san_pham->ten_loai;
			/*******---- END Loại Sản phẩm-----************************************************************/
			
			 
			 //sản phẩm
			 $ds_san_pham_theo_ma_loai=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai); 		
			 $count=count($ds_tat_ca_san_pham);
			 $pages=$pager->findPages($count,$limit);  //số trang được chia, ví dụ:có 50sp ,10sp/1trang->5tr
			 			//echo $pages;
			 $vt=$pager->findStart($limit);
			 if($count>$limit)
			 {
				$phan_trang=$pager->pageList($curpage, $pages)	;
			 }
			 $ds_tat_ca_san_pham=$m_san_pham->Doc_san_pham_theo_ma_loai($ma_loai,0,$vt,$limit);
			
					
			 
			 /*********** Phần xử lý khi ma_loai có các cấp con**************************/	
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
				
				$ds_tat_ca_san_pham=$ds_san_pham_theo_ma_loai;
				
			
				$count=count($ds_tat_ca_san_pham);
				$pages=$pager->findPages($count,$limit);  //số trang được chia, ví dụ:có 50sp ,10sp/1trang->5tr
				$vt=$pager->findStart($limit);
				if($count>$limit)
				{
				$phan_trang=$pager->pageList($curpage, $pages)	;
				}
				
				$arr_sau_phan_trang=array();
				$length=count($mang_ds_san_pham);
				$dem=0;
				for($i=$vt;$i<$length;$i++)
				{
					if($dem==$limit) break;
					$arr_sau_phan_trang[]=$mang_ds_san_pham[$i];
					$dem++;
				}
				
				$ds_tat_ca_san_pham=$arr_sau_phan_trang;
					 //echo $phan_trang;
			
			}
			/***********END --- Phần xử lý khi ma_loai có các cấp con**************************/
	 		 
		}
		else
		{
			
			/************** KHi ko có querystring ma_loai*************************************/
			$ds_tat_ca_san_pham=$m_san_pham->Doc_tat_ca_san_pham();
			$count=count($ds_tat_ca_san_pham);	
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			if($count>$limit)
			{
			$phan_trang=$pager->pageList($curpage, $pages)	;
			}
			$ds_tat_ca_san_pham=$m_san_pham->Doc_tat_ca_san_pham($vt,$limit);
				//echo $phan_trang;
			
			
			/************** KHi ko có querystring ma_loai*************************************/
		}
		
		
		
		/*******************SEARCH*************************************************/
		$mang_chua_ten_san_pham=array();
		$ds_san_pham=$m_san_pham->Doc_tat_ca_san_pham();
		foreach($ds_san_pham as $sp)
		{
			$mang_chua_ten_san_pham[]=$sp->ten_san_pham;
		}
		
		if(isset($_POST["btnTim"]))
		{
			$gia_tri_tim=$_POST["search"];
			$ds_kq_tim=$m_san_pham->Tim_san_pham($gia_tri_tim);
			$ds_tat_ca_san_pham=$ds_kq_tim;	
		}
		/******************END-SEARCH***************************************************/
		
	
		//views
		$view="views/san_pham/v_san_pham.php";
		include("templates/layout.php");	
	}
}
?>