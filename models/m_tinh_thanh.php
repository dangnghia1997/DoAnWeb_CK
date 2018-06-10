<?php
include_once("database.php");
class M_tinh_thanh extends database
{
	public function Doc_tat_ca_tinh_thanh()
	{
		$sql="SELECT * FROM tinh_thanh";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Doc_tinh_thanh_theo_id_tinh_thanh($id_tinh_thanh)
	{
		$sql="SELECT * FROM tinh_thanh ";
		$sql.="WHERE id_tinh_thanh=?";
		
		$this->setQuery($sql);
		
		$parram=array($id_tinh_thanh);
		
		return $this->loadRow($parram);	
	}	
}

?>