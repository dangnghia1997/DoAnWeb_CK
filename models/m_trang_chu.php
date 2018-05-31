<?php
include_once("database.php");
class M_Trang_Chu extends database
{
		public function Doc_tat_ca_nha_cung_cap()
		{
			$sql="SELECT * FROM nha_cung_cap";
			$this->setQuery($sql);
			
			return $this->loadAllRows();	
		}
		
		
		public function Doc_nha_cung_cap_theo_ma_nha_cung_cap($ma_nha_cung_cap)
		{
			$sql="SELECT * FROM nha_cung_cap ";
			$sql.="WHERE ma_nha_cung_cap=?";
			$this->setQuery($sql);
			$parram=array($ma_nha_cung_cap);
			
			return $this->loadRow($parram);	
		}
}

?>