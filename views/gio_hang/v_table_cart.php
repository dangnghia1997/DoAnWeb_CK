<?php
if(isset($ds_tt_gio_hang))
{
	//Nếu có sản phẩm trong giỏ hàng
?>
<form method="post">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Hình ảnh sản phẩm</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Đơn giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($ds_tt_gio_hang as $gh)
									{
									?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="javascript:XL_ajax_xoa_mat_hang(<?php echo $gh->ma_san_pham?>,<?php echo $gh->don_gia?>)">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="public/layout/images/<?php echo $gh->hinh;?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $gh->ma_san_pham;?>"><?php echo $gh->ten_san_pham;?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo number_format($gh->don_gia);?>₫</span> 
                                                <input type="hidden" name="dongia<?php echo $gh->ma_san_pham;?>" value="<?php echo $gh->don_gia;?>" />
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <!--<input type="button" class="minus" value="-">-->
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $gh->soluong;?>" min="1" step="1" name="soluong<?php echo $gh->ma_san_pham;?>">
                                                    <!--<input type="button" class="plus" value="+">-->
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo number_format($gh->soluong*$gh->don_gia);?>₫</span> 
                                            </td>
                                        </tr>
                                    <?php
									}
									?>   
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <!--<div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>-->
                                                <a href="san_pham.php"><i class="fa fa-reply-all"></i>Tiếp tục mua hàng</a>
                                                <input type="submit" value="Cập nhật giở hàng" name="btn_cap_nhat" class="button">
                                                <input type="submit" value="Thanh toán" name="btn_thanh_toan" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
<?php
}
else
{
	//Khi không có sản phẩm trong giỏ hàng hiện thông báo
?>
<div class="container" style="text-align:center">
<h1>Không có sản phẩm nào trong giỏ hàng!</h1>
<a href="san_pham.php"><i class="fa fa-reply-all"></i>Tiếp tục mua hàng</a>
</div>

<?php
}
?>