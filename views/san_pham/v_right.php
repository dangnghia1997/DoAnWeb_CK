<div class="col-md-9">
<?php
if(isset($_POST["btnTim"]))
{
	if($gia_tri_tim!="")
	{
?>
<h1>Tìm Kiếm</h1>
<p>Kết quả tìm kiếm cho "<b><?php echo $gia_tri_tim;?></b>"</p>

<?php
	}
}
?>

<?php
foreach($ds_tat_ca_san_pham as $sanpham)
{
?>
                
         <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                        	<a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sanpham->ma_san_pham;?>" title="<?php echo $sanpham->ten_san_pham; ?>" id="tensp<?php echo $sanpham->ma_san_pham?>">
                            <img src="public/layout/images/<?php echo $sanpham->hinh?>" alt="">
                            </a>
                        </div>
                        <h2><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sanpham->ma_san_pham;?>" title="<?php echo $sanpham->ten_san_pham; ?>" id="tensp<?php echo $sanpham->ma_san_pham?>"><?php echo $sanpham->ten_san_pham; ?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo number_format($sanpham->don_gia)." "?>₫</ins>
                            <input type="hidden" id="dongia<?php echo $sanpham->ma_san_pham?>" value="<?php echo $sanpham->don_gia?>" />
                            <input type="hidden" id="soluong<?php echo $sanpham->ma_san_pham?>" value="1" />
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="javascript:void(0)" id="<?php echo $sanpham->ma_san_pham?>" >Thêm vào giỏ</a>
                        </div>                      
                    </div>
                </div>  
<?php 
}

?>                                                    
               
</div>