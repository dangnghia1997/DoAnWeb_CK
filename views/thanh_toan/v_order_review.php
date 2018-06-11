<?php
if(isset($_SESSION['gio_hang']))
{
?>
<h3 id="order_review_heading">Đơn hàng</h3>
<div id="order_review" style="position: relative;">
  <table class="shop_table">
    <thead>
      <tr>
        <th class="product-name">Sản phẩm</th>
        <th class="product-total">Thành tiền</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
	  
      foreach($ds_tt_gio_hang as $gh)
	  {
	  ?>
      <tr class="cart_item">
        <td class="product-name"> <?php echo $gh->ten_san_pham;?> <strong class="product-quantity">× <?php echo $gh->soluong;?></strong></td>
        <td class="product-total"><span class="amount"><?php echo number_format($gh->soluong * $gh->don_gia)?> ₫</span></td>
      </tr>
      <?php
	  }
	  ?>  
      
    </tbody>
    <tfoot>
      <tr class="cart-subtotal">
        <th>Tạm tính</th>
        <td><span class="amount"><?php echo number_format($_SESSION["thanh_tien"])?>₫</span></td>
      </tr>
      <tr class="shipping">
        <th>Phí vận chuyển</th>
        <td> Miễn phí
          <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
      </tr>
      <tr class="order-total">
        <th>TỔNG CỘNG</th>
        <td><strong><span class="amount"><?php echo number_format($_SESSION["thanh_tien"])?>₫</span></strong></td>
      </tr>
    </tfoot>
  </table>
  
</div>
<?php
}
else
{
?>
<div style="text-align:center">
<h4>Không có sản phẩm nào trong giỏ hàng để thanh toán!</h4>
<a href="san_pham.php"><i class="fa fa-reply-all"></i>Tiếp tục mua hàng</a>
</div>
<?php
}
?>