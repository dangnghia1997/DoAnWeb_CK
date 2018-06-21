<?php
include("models/m_quan_huyen.php");

$id_ma_tinh=$_POST["id_ma_tinh"];
if($id_ma_tinh=='null')
{
	echo '<option value="null" selected="">----------------</option>';	
}
else
{
$m_quan_huyen=new M_quan_huyen();
$ds_quan_huyen_theo_ma_tinh=$m_quan_huyen->Doc_quan_huyen_theo_id_tinh_thanh($id_ma_tinh);

//echo "<pre>";
//print_r($ds_quan_huyen_theo_ma_tinh);
?>
<?php
	foreach($ds_quan_huyen_theo_ma_tinh as $qh)
	{
?>
<option value="<?php echo $qh->ten_quan_huyen;?>"><?php echo $qh->ten_quan_huyen;?></option>
<?php
	}

}
?>
