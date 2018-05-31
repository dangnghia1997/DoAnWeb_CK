<?php
include_once("database.php");
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
	
}

?>