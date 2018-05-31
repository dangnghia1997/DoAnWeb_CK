<?php

function inMenu($mang,$id_cha=NULL)
{
	$i=0;
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

?>