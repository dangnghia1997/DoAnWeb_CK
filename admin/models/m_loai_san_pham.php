<?php
include_once("../models/database.php");
class M_loai_san_pham extends database
{
	public function Doc_tat_ca_loai_san_pham()
	{
		$sql="SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Doc_loai_san_pham_theo_ma_loai($ma_loai)
	{
		$sql="SELECT * FROM loai_san_pham ";
		$sql.="WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ma_loai);
		return $this->loadRow($parram);	
	}
	
	public function Them_loai_san_pham($ma_loai_cha,$ten_loai)
	{
		$sql="INSERT INTO loai_san_pham ";
		$sql.="VALUES(?,?,?)";	
		$this->setQuery($sql);
		$parram=array(NULL,$ma_loai_cha,$ten_loai);
		$kq=$this->execute($parram);
		return $kq->rowCount();
	}
	
	public function Cap_nhat_loai_san_pham($ma_loai,$ma_loai_cha,$ten_loai)
	{
		$sql="UPDATE loai_san_pham SET ma_loai_cha=?,ten_loai=? ";
		$sql.="WHERE ma_loai=?";
		
		$this->setQuery($sql);
		$parram=array($ma_loai_cha,$ten_loai,$ma_loai);
		$kq=$this->execute($parram);  //$kq là đối tượng sta
		return $kq->rowCount(); // trả về số dòng thực thi được
	}
	
	public function Xoa_loai_san_pham($ma_loai)
	{
		$sql="DELETE FROM loai_san_pham ";
		$sql.="WHERE ma_loai=?";
		
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		$kq=$this->execute($parram);
		return $kq->rowCount();	   // trả về số dòng được xóa
	}
}


/*$m_loai_san_pham=new M_loai_san_pham();
$kq=$m_loai_san_pham->Them_loai_san_pham(3,"Test chức năng thêm");
echo $kq;*/
?>