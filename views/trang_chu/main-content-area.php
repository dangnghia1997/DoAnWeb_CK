<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản phẩm HOT</h2>
                        <div class="product-carousel">
                        <?php
                        foreach($ds_san_pham_HOT as $sp_HOT)
						{
						?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="public/layout/images/<?php echo $sp_HOT->hinh;?>" alt="">
                                    <div class="product-hover">
                                    <input type="hidden" id="dongia<?php echo $sp_HOT->ma_san_pham;?>" value="<?php echo $sp_HOT->don_gia?>" />
                                    <input type="hidden" id="soluong<?php echo $sp_HOT->ma_san_pham?>" value="1"/>
                                        <a href="javascript:void(0)" class="add-to-cart-link" id="<?php echo $sp_HOT->ma_san_pham?>"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                        <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp_HOT->ma_san_pham;?>" class="view-details-link"><i class="fa fa-link"></i> Xem Chi Tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp_HOT->ma_san_pham;?>"><?php echo $sp_HOT->ten_san_pham;?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo $sp_HOT->don_gia;?></ins> 
                                </div> 
                            </div>
                         <?php
						}
						 ?>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>