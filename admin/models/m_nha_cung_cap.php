<?php
include_once("../models/database.php");
class M_nha_cung_cap extends database
{
		public function Doc_tat_ca_nha_cung_cap()
		{
			$sql="SELECT * FROM nha_cung_cap";
			$this->setQuery($sql);
			
			return $this->loadAllRows();	
		}
		
		
		public function Doc_nha_cung_cap_theo_ma_nha_cung_cap($ma_nha_cung_cap)
		{
			$sql="SELECT * FROM nha_cung_cap ";
			$sql.="WHERE ma_nha_cung_cap=?";
			$this->setQuery($sql);
			$parram=array($ma_nha_cung_cap);
			
			return $this->loadRow($parram);	
		}
		
		public function Them_nha_cung_cap($ten_nha_cung_cap,$hinh)
		{
			$sql="INSERT INTO nha_cung_cap ";
			$sql.="VALUES(?,?,?)";
			$this->setQuery($sql);
			$parram=array(NULL,$ten_nha_cung_cap,$hinh);
			$kq=$this->execute($parram);
			return $kq->rowCount();
		}
		
		public function Xoa_nha_cung_cap($ma_nha_cung_cap)
		{
		$sql="DELETE FROM nha_cung_cap ";
		$sql.="WHERE ma_nha_cung_cap=?";
		
		$this->setQuery($sql);
		$parram=array($ma_nha_cung_cap);
		
		$kq=$this->execute($parram);
		return $kq->rowCount();	   // trả về số dòng được xóa
		}
}
?>