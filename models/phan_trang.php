<?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}
	function pageList($curpage, $pages)
	{
			$querystring="";
			$page_list="";
			
			if(!empty($_SERVER["QUERY_STRING"]))
			{
				$args = explode("&",$_SERVER["QUERY_STRING"]);
				foreach($args as $arg) {
					$keyval = explode("=",$arg);
					if($keyval[0] != "page") $querystring .= $arg . "&" ;
				}
			}
		
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=1\" title=\"Trang đầu\"><<</a></span>";
			}
			if(($curpage-1)>0)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".($curpage-1)."\" title=\"Về trang trước\"><</a></span>";
			}
			
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);

			
			/*if($vtdau>1){
			$page_list.='<span class="div_trang">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".($vtdau-1)."' title='Trang ".($vtdau-1)."'>...</a></span>";
			}*/
			
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<span class="div_trang">'."<b>".$i."</b></span>";
					}
					else
					{
						$page_list.='<span class="div_trang">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".$i."' title='Trang ".$i."'>".$i."</a></span>";
					}
				}

			/*if($vtcuoi<$pages){
				$page_list.='<span class="div_trang">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".($vtcuoi+1)."' title='Trang ".($vtcuoi+1)."'>...</a></span>";
			}*/


			if(($curpage+1)<=$pages)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".($curpage+1)."\" title=\"Đến trang sau\">></a></span>";
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".$pages."\" title=\"Đến trang cuối\">>></a></span>";
			}
			return $page_list;
	}
}
?>