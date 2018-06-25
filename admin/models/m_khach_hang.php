<?php
include_once("../models/database.php");
class M_khach_hang extends database
{
	public function Doc_tat_ca_khach_hang()
	{
		$sql="SELECT * FROM khach_hang";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql="SELECT * FROM khach_hang ";
		$sql.="WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		$parram=array($ma_khach_hang);
		return $this->loadRow($parram);	
	}
	
	public function Xoa_khach_hang($ma_khach_hang)
	{
		$sql="DELETE FROM khach_hang WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		$parram=array($ma_khach_hang);
		$kq=$this->execute($parram);
		return $kq->rowCount();	
	}
	
	public function Cap_nhat_khach_hang($ma_khach_hang,$ten_khach_hang,$email,$dia_chi,$so_dien_thoai,$ghi_chu,$trang_thai,$thanh_vien)
	{
		$sql="UPDATE khach_hang SET ten_khach_hang=?,email=?,dia_chi=?,so_dien_thoai=?,ghi_chu=?,trang_thai=?,thanh_vien=? ";
		$sql.="WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		
		$parram=array($ten_khach_hang,$email,$dia_chi,$so_dien_thoai,$ghi_chu,$trang_thai,$thanh_vien,$ma_khach_hang);
		$kq=$this->execute($parram);
		return $kq->rowCount();	
	}
	
	public function Doc_nhung_khach_hang_da_thanh_toan()
	{
		$sql="SELECT * FROM khach_hang WHERE trang_thai=1";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Thong_ke_tong_tien_theo_ngay_dat($chuoi)
	{
		$sql="SELECT ngay_dat,sum(tong_tien) as TIEN FROM (SELECT * FROM `don_hang` WHERE ma_khach_hang IN($chuoi)) as bang_don_hang_da_thanh_Toan GROUP BY ngay_dat";
		
		
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

}
?>