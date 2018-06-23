<?php
//models
if(isset($_GET['ma_don_hang']))
{
	$ma_don_hang=$_GET['ma_don_hang'];
	include("models/m_don_hang.php");
	$m_don_hang=new M_don_hang();
	$ct_don_hang=$m_don_hang->Doc_ct_don_hang_theo_ma_don_hang($ma_don_hang);
	
	include("models/m_san_pham.php");
	$m_san_pham=new M_san_pham();
}

//views
$view="views/don_hang/v_chi_tiet_don_hang.php";
include("templates/layout.php");
?>