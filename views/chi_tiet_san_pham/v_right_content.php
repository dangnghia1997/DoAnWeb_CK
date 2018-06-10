<div class="row">
                            <div class="col-sm-5">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="public/layout/images/<?php echo $san_pham->hinh;?>" alt="">
                                    </div>
                                    
                                   <!-- <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                        <img src="img/product-thumb-4.jpg" alt="">
                                    </div>-->
                                </div>
                            </div>
                            
                            <div class="col-sm-7">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $san_pham->ten_san_pham;?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($san_pham->don_gia)." ";?>₫</ins> 
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" id="soluong<?php echo $san_pham->ma_san_pham;?>">
                                            <input type="hidden" id="dongia<?php echo $san_pham->ma_san_pham;?>" value="<?php echo $san_pham->don_gia;?>" />
                                        </div>
                                        
                                        <button class="add_to_cart_button" type="submit" id="<?php echo $san_pham->ma_san_pham;?>">Thêm vào giỏ</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Danh mục: <a href=""><?php echo $loai_san_pham->ten_loai;?></a>.</p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
                                        </ul>
                                        <div class="tab-content">
                                        <!--Nội dung Mô tả --->
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả</h2>  
                                                <span>
                                                	<?php echo $san_pham->mo_ta;?>
                                                </span>
                                            </div>
                                        <!--End Nội dung Mô tả --->    
                                        
                                        <!--Nội dung Đánh giá --->    
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Đánh giá</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Họ tên</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Bỏ phiếu</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Nội dung đánh giá</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Gửi"></p>
                                                </div>
                                            </div>
                                        <!--End Nội dung Đánh giá --->  
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>