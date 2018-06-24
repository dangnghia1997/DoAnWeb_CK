<?php
include_once("../models/database.php");
class M_san_pham extends database
{
	public function Doc_tat_ca_san_pham($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM san_pham ";
		if($vt>=0 && $limit>0)
		{
			$sql.="LIMIT $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="SELECT * FROM san_pham ";
		$sql.="WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);
		
		return $this->loadRow($parram);	
	}
	
	public function Doc_san_pham_theo_ma_nha_cung_cap($ma_nha_cung_cap)
	{
		$sql="SELECT * FROM san_pham ";
		$sql.="WHERE ma_nha_cung_cap=?";
		$this->setQuery($sql);
		
		$parram=array($ma_nha_cung_cap);
		
		return $this->loadAllRows($parram);	
	}
	
	public function Doc_san_pham_theo_ma_loai($ma_loai,$ngoai_tru=-1,$vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM san_pham ";
		
		$sql.="WHERE ma_loai=?";
		if($ngoai_tru>0)
		{
			$sql.=" AND ma_san_pham<>$ngoai_tru";	
		}
		
		if($vt>=0 && $limit>0)
		{
			$sql.=" LIMIT $vt,$limit ";	
		}
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->loadAllRows($parram);	
	}	
	
	
	public function Tim_san_pham($gia_tri_tim)
	{
		$sql="SELECT * FROM san_pham WHERE ten_san_pham like '%$gia_tri_tim%'";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Them_san_pham($ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta)
	{
		$sql="INSERT INTO san_pham ";
		$sql.="VALUES(?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$parram=array(NULL,$ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta);
		$kq=$this->execute($parram);
		return $kq->rowCount();
	}
	
	public function Cap_nhat_san_pham($ma_san_pham,$ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta)
	{
		$sql="UPDATE san_pham SET ma_loai=?,ma_nha_cung_cap=?,ten_san_pham=?,hinh=?,don_gia=?,mo_ta=? ";
		$sql.="WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_loai,$ma_nha_cung_cap,$ten_san_pham,$hinh,$don_gia,$mo_ta,$ma_san_pham);
		$kq=$this->execute($parram);
		return $kq->rowCount();	
	}
	
	public function Xoa_san_pham($ma_san_pham)
	{
		$sql="DELETE FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$kq=$this->execute(array($ma_san_pham));
		return $kq->rowCount();	
	}
}
?>