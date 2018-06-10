
<?php
if(isset($ds_tt_gio_hang))
{
?>
<div class="cart_totals ">
                                <h2>Tổng giỏ hàng</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <!--<tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£15.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>-->

                                        <tr class="order-total">
                                            <th>Tổng cộng:</th>
                                            <td><strong><span class="amount"><?php echo number_format($_SESSION['thanh_tien'])?>₫</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
<?php
}
?>