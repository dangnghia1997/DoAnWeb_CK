<div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm Khác</h2>
                            <div class="related-products-carousel">
                            <?php 
							foreach($san_pham_khac as $sp_khac)
							{
							?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="public/layout/images/<?php echo $sp_khac->hinh;?>" alt="">
                                        <div class="product-hover">
                                        <input type="hidden" id="soluong<?php echo $sp_khac->ma_san_pham; ?>" value="1" />
                                        <input type="hidden" id="dongia<?php echo $sp_khac->ma_san_pham;?>" value="<?php echo $sp_khac->don_gia;?>" />
                                            <a href="" class="add-to-cart-link" id="<?php echo $sp_khac->ma_san_pham?>"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp_khac->ma_san_pham;?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                        </div>
                                    </div>

                                    <h2><a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $sp_khac->ma_san_pham;?>"><?php echo $sp_khac->ten_san_pham;?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($sp_khac->don_gia)." ";?>₫</ins> 
                                    </div> 
                                </div>
                            <?php
							}
							?>                                       
                            </div>
                        </div>