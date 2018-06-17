<?php
include_once("database.php");
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
	
	public function Them_khach_hang($ten_khach_hang,$email,$dia_chi,$so_dien_thoai,$ghi_chu,$trang_thai,$thanh_vien)
	{
		$sql="INSERT INTO khach_hang ";
		$sql.="VALUES(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		
		$parram=array(NULL,$ten_khach_hang,$email,$dia_chi,$so_dien_thoai,$ghi_chu,$trang_thai,$thanh_vien);
		
		$kq=$this->execute($parram);
		if($kq) return $this->getLastId();
		else return false;
	}
	

	public function Them_don_hang($ma_khach_hang,$ngay_dat,$hinh_thuc_thanh_toan,$tong_tien)
	{
		$sql="INSERT INTO don_hang ";
		$sql.="VALUES(?,?,?,?,?)";
		
		$this->setQuery($sql);
		$parram=array(NULL,$ma_khach_hang,$ngay_dat,$hinh_thuc_thanh_toan,$tong_tien);
		$kq=$this->execute($parram);
		if($kq) return $this->getLastId();
		else return false;
	}
	
	public function Them_chi_tiet_don_hang($ma_don_hang,$ma_san_pham,$so_luong)
	{
		$sql="INSERT INTO chi_tiet_don_hang ";
		$sql.="VALUES(?,?,?)";
		$this->setQuery($sql);
		$parram=array($ma_don_hang,$ma_san_pham,$so_luong);
		
		$this->execute($parram);	
	}
	
	
}
?>