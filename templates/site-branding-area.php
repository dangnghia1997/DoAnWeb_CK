<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1><a href=".">Food<span>Supp</span></a></h1>
                    </div>
                </div>
                
                <?php include("search.php")?>
                
                <div class="col-sm-4">
                    <div class="shopping-item">
                        <a href="gio_hang.php">Giỏ hàng - <span class="cart-amunt"><?php echo isset($_SESSION["thanh_tien"])?number_format($_SESSION["thanh_tien"]):0?> ₫</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo isset($_SESSION["so_luong"])?$_SESSION["so_luong"]:0?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>