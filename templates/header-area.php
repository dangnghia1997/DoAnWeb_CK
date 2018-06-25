<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <!--<li><a href="#"><i class="fa fa-user"></i> My Account</a></li>-->
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li> -->
                            <!--<li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>-->
                            <?php
                            if(isset($_SESSION['username']))
							{
							?>
							<li>
                                <ul class="list-unstyled list-inline">
                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#" id="hien_thi_tai_khoan"><i class="fa fa-user"></i> <?php echo "Chào,".$_SESSION["username"]?></a>
                                            <ul class="dropdown-menu con">
                                                <li><a data-toggle="modal" data-target="#myDoiMatKhau">Đổi mật khẩu</a></li>
                                                <li><a href="javascript:var r=confirm('Bạn muốn đăng xuất?');if(r==true) window.location='dang_xuat.php'">Đăng Xuất</a></li>
                                                
                                            </ul> 
                                        </li>
    
                                </ul>
                                </li>	
                                <?php	
                                }
                                else
                                {
                                ?>
                                <li>
                                    <ul class="list-unstyled list-inline">
                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> Tài khoản</a>
                                            <ul class="dropdown-menu con">
                                                <li><a data-toggle="modal" data-target="#myDangNhap">Đăng Nhập</a></li>
                                                <li><a data-toggle="modal" data-target="#myDangkY">Đăng Ký</a></li>
                                                
                                            </ul> 
                                        </li>
    
                                </ul>
                            </li>
                            <?php
							}
							?>
                        </ul>
                        
                    </div>
                </div>
                
                <!--<div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul> 
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>-->
            </div>
        </div>
    </div>