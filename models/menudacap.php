<?php
function inMenu($mang,$id_cha=NULL)
{
	foreach($mang as $k=>$m)
	{
		
			if($m->ma_loai_cha==$id_cha)
			{
				echo "<li class='css'><a href='san_pham.php?ma_loai=".$m->ma_loai."'>"."<span>".$m->ten_loai."</span>"."</a>";
				
				if(hasChild($mang,$m->ma_loai))
				{
					echo "<span class='arrow' data-toggle='collapse' data-target='#".$m->ma_loai."'>"."<i class='fa fa-angle-down'></i>"."</span>";
					echo "<ul class='sub-menu collapse' id='".$m->ma_loai."'>"	;
					inMenu($mang,$m->ma_loai);
					echo "</ul>";
				}
				echo "</li>";
			}
		
	}	
}

function hasChild($mang,$id_cha)
{
	foreach($mang as $m)
	{
		if($m->ma_loai_cha==$id_cha)
		{
			return true;		
		}
	}	
}

function Lay_mang_ma_san_pham_theo_ma_loai($arr_ma_loai_cha,$ma_loai)
{
	$mang=array();
	include_once("models/m_loai_san_pham.php");
	$m_loai_san_pham=new M_loai_san_pham();
	$arr_ma_loai=$m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai_cha($ma_loai);
	foreach($arr_ma_loai as $item)
	{
		if(in_array($item->ma_loai,$arr_ma_loai_cha))
		{
			$arr=Lay_mang_ma_san_pham_theo_ma_loai($arr_ma_loai_cha,$item->ma_loai);
			foreach($arr as $k)
			{
				$mang[]=$k;
			}	
		}
		else
		{
			$mang[]=$item->ma_loai;	
		}
	}
	
	return $mang;

}




?>