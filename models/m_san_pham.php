<?php
include_once("database.php");
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
	
	public function Doc_san_pham_theo_ma_loai($ma_loai,$ngoai_tru=-1)
	{
		$sql="SELECT * FROM san_pham ";
		$sql.="WHERE ma_loai=?";
		if($ngoai_tru>0)
		{
			$sql.=" AND ma_san_pham<>$ngoai_tru";	
		}
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->loadAllRows($parram);	
	}	
}

/*$M_san_pham=new M_san_pham();
$arr=$M_san_pham->Doc_san_pham_theo_ma_nha_cung_cap(4);
echo "<pre>";
print_r($arr);*/
?>