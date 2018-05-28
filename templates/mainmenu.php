

<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                
                <script>
				// Giữ nút ở menu
$(function() {
	
	pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var vt=window.location.href.lastIndexOf("?")-1;
	if(vt>0)
	{
		pgurl = window.location.href.substr(1,vt);
		pgurl =pgurl.substr(pgurl.lastIndexOf("/")+1);	
	}	
	
	 if (pgurl=="") pgurl="." ;
     $("ul.navbar-nav li a").each(function(){
		 	//remove truoc
		 	$(this).parent().removeClass("active");
			
			//add lai
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).parent().addClass("active");
     })
});
</script>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Trang Chủ</a></li>
                        <li><a href="san_pham.php">Sản phẩm</a></li>
                        <li><a href="chi_tiet_san_pham.php">Chi tiết sản phẩm</a></li>
                        <li><a href="gio_hang.php">Giỏ hàng</a></li>
                        <li><a href="thanh_toan.php">Thanh toán</a></li>
                        <!-- <li><a href="#">Category</a></li> -->
                        <!-- <li><a href="#">Others</a></li> -->
                        <li><a href="lien_he.php">Liên hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>