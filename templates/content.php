<div class="main">
<!--Form đăng ký - đăng nhập - đổi mật khẩu-->
<?php include("form_dangky_dangnhap.php")?>
<!--Form đăng ký - đăng nhập - đổi mật khẩu-->


<div id="chinh_sach_doi_tra" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:80%;">

    <!-- Modal content-->
    <div class="modal-content" style="width:100%;">
      
      <div class="modal-body">
        <embed src="public/document/CHÍNH SÁCH ĐỔI TRẢ.pdf" width="100%" height="600px"> 
      </div>
      
    </div>

  </div>
</div>
<?php 
//Thay đổi view
if(isset($view))
{
	include($view); 
}
?>
</div>