<?php
include_once("database.php");
class M_quan_huyen extends database
{
	public function Doc_tat_ca_quan_huyen()
	{
		$sql="SELECT * FROM quan_huyen";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Doc_quan_huyen_theo_id_quan_huyen($id_quan_huyen)
	{
		$sql="SELECT * FROM quan_huyen ";
		$sql.="WHERE id_quan_huyen=?";
		
		$this->setQuery($sql);
		
		$parram=array($id_quan_huyen);
		
		return $this->loadRow($parram);	
	}
	
	public function Doc_quan_huyen_theo_id_tinh_thanh($id_tinh_thanh)
	{
		$sql="SELECT * FROM quan_huyen ";
		$sql.="WHERE id_tinh_thanh=?";
		
		$this->setQuery($sql);
		
		$parram=array($id_tinh_thanh);
		
		return $this->loadAllRows($parram);	
	}	
}

?>