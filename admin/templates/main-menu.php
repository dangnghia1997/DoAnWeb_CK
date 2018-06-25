<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
<nav class="main-menu">
		<ul>
			<li>
				<a href="index_quan_tri.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Trang Chủ
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-users" aria-hidden="true"></i>
				<span class="nav-text">
					User
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="ds_users.php">
						<i class="fa fa-list-alt"></i> Danh sách user
					</a>
					</li>
                    <?php 
					if($_SESSION['admin']['lv']==2) //Khi admin mới hiện
					{
					?>
					<li>
					<a class="subnav-text" href="them_users.php">
						<i class="fa fa-plus"></i> Thêm user
					</a>
					</li>
                    <?php
					}
					?>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Loại sản phẩm
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="ds_loai_san_pham.php">
                        <i class="fa fa-list-alt"></i> Danh sách Loại sản phẩm
                        </a>
					</li>
                    <?php
                    if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
					{
					?>
					<li>
						<a class="subnav-text" href="them_loai_san_pham.php">
                        	<i class="fa fa-plus"></i> Thêm Lọai sản phẩm
                        </a>
					</li>
                    <?php
					}
					?>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Nhà cung cấp</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="ds_nha_cung_cap.php">
							<i class="fa fa-list-alt"></i> Danh sách Nhà cung cấp
						</a>
					</li>
                    <?php
                    if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
					{
					?>
					<li>
						<a class="subnav-text" href="them_nha_cung_cap.php">
							<i class="fa fa-plus"></i> Thêm Nhà cung cấp
						</a>
					</li>
					<?php
					}
					?>
				</ul>
			</li>
            <li class="has-subnav">
				<a href="javascript:;">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Sản phẩm
					</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
                <ul>
					<li>
						<a class="subnav-text" href="ds_san_pham.php">
							<i class="fa fa-list-alt"></i> Danh sách Sản phẩm
						</a>
					</li>
                    <?php
                    if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
					{
					?>
					<li>
						<a class="subnav-text" href="them_san_pham.php">
							<i class="fa fa-plus"></i> Thêm Sản phẩm
						</a>
					</li>
					<?php
					}
					?>
				</ul>
			</li>
            <li>
				<a href="ds_khach_hang.php">
					<i class="fa fa-money"></i>
					<span class="nav-text">
						Danh sách khách hàng
					</span>
				</a>
			</li>
            <li>
				<a href="ds_don_hang.php">
					<i class="fa fa-book"></i>
					<span class="nav-text">
						Danh sách đơn hàng
					</span>
				</a>
			</li>
            <?php 
			if($_SESSION['admin']['lv']==2) //Khi là admin mới hiện
			{
			?>
			<li>
				<a href="thong_tin_admin.php">
                	<i class="fa fa-user-md"></i>
					<!--<i class="fa fa-bar-chart nav_icon"></i>-->
					<span class="nav-text">
						Thông Tin Admin
					</span>
				</a>
			</li>
            <?php
			}
			?>
            
            
			<!--<li>
				<a href="typography.html">
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					Typography
					</span>
				</a>
			</li>
			<li>
				<a href="maps.html">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span class="nav-text">
					Maps
					</span>
				</a>
			</li>
			<li>
				<a href="error.html">
					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					<span class="nav-text">
					Error Page
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Extras</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="faq.html">FAQ</a>
					</li>
					<li>
						<a class="subnav-text" href="blank.html">Blank Page</a>
					</li>
				</ul>
			</li>-->
		</ul>
		<ul class="logout">
			<li>
			<a href="dang_xuat_admin.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Đăng Xuất
			</span>
			</a>
			</li>
		</ul>
	</nav>