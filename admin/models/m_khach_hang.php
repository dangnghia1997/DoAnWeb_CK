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

}
?>