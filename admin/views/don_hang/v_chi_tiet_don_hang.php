
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Chi tiết đơn hàng(MDH:<?php echo $ma_don_hang?>)</h2>
                    <h5>
                    	<a href="ds_don_hang.php"><i class="fa fa-reply-all"></i> Về trang danh sách</a>
                    </h5>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					    <table id="table">
						<thead>
						  <tr>
							<th>Mã Sản Phẩm</th>
							<th>Tên Sản Phẩm</th>
							<th>Hình</th>
                            <th>Số Lượng</th>
                            
						  </tr>
						</thead>
						<tbody>
                        <?php
                        foreach($ct_don_hang as $ct)
						{
							$sp=$m_san_pham->Doc_san_pham_theo_ma_san_pham($ct->ma_san_pham);
						?>
						  <tr>
							<td><?php echo $ct->ma_san_pham?></td>
                            <td><?php echo $sp->ten_san_pham?></td>
                            <td>
                            	<img class="hinh_san_pham" src="../public/layout/images/<?php echo $sp->hinh?>" alt="hinhsanpham">
                            </td>
                            <td><?php echo $ct->so_luong?></td>
                              
						</tr>
						<?php
						}
						?>
						</tbody>
					  </table>
					</div>
				  
			
				  
				</div>
				<!-- //tables -->
			</div>
		</div>