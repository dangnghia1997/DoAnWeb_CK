<div class="col-md-9">

<?php 
$danh_muc=array("wheycasein"=>"xml/phat_trien_co/whey_protein/wheycasein.xml",
				"wheyconcentrate"=>"xml/phat_trien_co/whey_protein/wheyconcentrate.xml",
				"wheyhydrolized"=>"xml/phat_trien_co/whey_protein/wheyhydrolized.xml",
				"wheyproteinblend"=>"xml/phat_trien_co/whey_protein/wheyproteinblend.xml",
				"wheyproteinisolate"=>"xml/phat_trien_co/whey_protein/wheyproteinisolate.xml",
				"protein_bar"=>"xml/phat_trien_co/protein_bar.xml",
				"bcaa"=>"xml/bcaa/bcaa.xml",
				"mass_cao_nang_luong"=>"xml/tang_can/mass_cao_nang_luong.xml",
				"mass_trung_nang_luong"=>"xml/tang_can/mass_trung_nang_luong.xml",
				"creatine"=>"xml/tang_suc_manh/creatine.xml",
				"pre-workout"=>"xml/tang_suc_manh/pre-workout.xml"
);
$tb_ma_loai="";
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		//mục phát triển cơ
			//Wheyprotein
		case 1:case 11:case 111:$path=$danh_muc["wheycasein"];
		break;
		case 112:$path=$danh_muc["wheyconcentrate"];
		break;
		case 113:$path=$danh_muc["wheyhydrolized"];
		break;
		case 114:$path=$danh_muc["wheyproteinblend"];
		break;
		case 115:$path=$danh_muc["wheyproteinisolate"];
		break;
			/**End wheyprotein**/
		case 12:$path=$danh_muc["protein_bar"];
		break;		
		/******End phát triển cơ****/
		
		//Mục tăng cân
		case 2:case 21:$path=$danh_muc["mass_cao_nang_luong"];
		break;
		case 22:$path=$danh_muc["mass_trung_nang_luong"];
		break;
		/***END tăng cân***/
		
		//Mục tăng sức mạnh
		case 3:case 31:$path=$danh_muc["pre-workout"];
		break;
		case 32:$path=$danh_muc["creatine"];
		break;
		/***END tăng sức mạnh***/
		
		//Mục bcaa
		case 5:$path=$danh_muc["bcaa"];
		break;
		/***END bcaa***/
	}
	
	$tb_ma_loai="&ma_loai=$ma_loai";
$ds_san_pham=simplexml_load_file($path);
}
else
{
$path=$danh_muc["wheycasein"];
$ds_san_pham=simplexml_load_file($path);
}
//echo "<pre>";
//print_r($ds_san_pham);
?>

<?php
foreach($ds_san_pham->sp as $sanpham)
{
?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="public/images/<?php echo $sanpham->hinh?>" alt="">
                        </div>
                        <h2><a href="chitietsanpham.php?id=<?php echo $sanpham->id;?><?php echo $tb_ma_loai ?>" title="<?php echo $sanpham->ten_sp; ?>" id="tensp<?php echo $sanpham->id?>"><?php echo $sanpham->ten_sp ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo $sanpham->gia?></ins>
                            <input type="hidden" id="dongia<?php echo $sanpham->id?>" value="<?php echo $sanpham->gia?>" />
                            <input type="hidden" id="hinh<?php echo $sanpham->id?>" value="<?php echo $sanpham->hinh?>" />
                            <input type="hidden" id="soluong<?php echo $sanpham->id?>" value="1" />
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="javascript:XL_ajax(<?php echo $sanpham->id?>)" onclick="window.location.reload(true)">Thêm vào giỏ</a>
                        </div>                      
                    </div>
                </div>
                
<?php 
}


?>  
                
                
                       
                
</div>