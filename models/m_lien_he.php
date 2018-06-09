<?php
include_once("database.php");
class M_lien_he extends database
{
	public function Doc_tat_ca_lien_he()
	{
		$sql="SELECT * FROM lien_he";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	public function Them_lien_he($ten_khach_hang, $email, $so_dien_thoai, $tieu_de, $noi_dung, $trang_thai)
	{
		$sql="INSERT INTO lien_he  VALUES (?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ten_khach_hang, $email, $so_dien_thoai, $tieu_de, $noi_dung, $trang_thai);
		return $this->execute($parram);
	}
}



?>