<?php
include_once("../models/database.php");
class M_don_hang extends database
{
	public function Doc_tat_ca_don_hang()
	{
		$sql="SELECT * FROM don_hang";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Doc_don_hang_theo_ma_don_hang($ma_don_hang)
	{
		$sql="SELECT * FROM don_hang ";
		$sql.="WHERE ma_don_hang=?";
		$this->setQuery($sql);
		$parram=array($ma_don_hang);
		return $this->loadRow($parram);	
	}
	
	public function Doc_don_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql="SELECT * FROM don_hang ";
		$sql.="WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		$parram=array($ma_khach_hang);
		return $this->loadRow($parram);	
	}
	
	public function Doc_ct_don_hang_theo_ma_don_hang($ma_don_hang)
	{
		$sql="SELECT * FROM chi_tiet_don_hang ";
		$sql.="WHERE ma_don_hang=?";
		$this->setQuery($sql);
		$parram=array($ma_don_hang);
		return $this->loadAllRows($parram);
	}
	
	
	public function Xoa_don_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql="DELETE FROM don_hang ";
		$sql.="WHERE ma_khach_hang=?";
		
		$this->setQuery($sql);
		$parram=array($ma_khach_hang);
		
		$kq=$this->execute($parram);
		return $kq->rowCount();	   // trả về số dòng được xóa
	}
	
	public function Xoa_don_hang($ma_don_hang)
	{
		$sql="DELETE FROM don_hang ";
		$sql.="WHERE ma_don_hang=?";
		
		$this->setQuery($sql);
		$parram=array($ma_don_hang);
		
		$kq=$this->execute($parram);
		return $kq->rowCount();	   // trả về số dòng được xóa
	}
	
	public function Xoa_ct_don_hang($ma_don_hang)
	{
		$sql="DELETE FROM chi_tiet_don_hang ";
		$sql.="WHERE ma_don_hang=?";
		
		$this->setQuery($sql);
		$parram=array($ma_don_hang);
		
		$kq=$this->execute($parram);
		return $kq->rowCount();	   // trả về số dòng được xóa
	}
}
?>