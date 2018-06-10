<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1><a href=".">e<span>Food Supplements</span></a></h1>
                    </div>
                </div>
                
                <?php include("search.php")?>
                
                <div class="col-sm-4">
                    <div class="shopping-item">
                        <a href="cart.html">Giỏ hàng - <span class="cart-amunt"><?php echo isset($_SESSION["thanh_tien"])?$_SESSION["thanh_tien"]:0?> đ</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo isset($_SESSION["so_luong"])?$_SESSION["so_luong"]:0?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>