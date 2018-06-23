
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Đơn Hàng</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									
									<li class="active">Danh sách Đơn Hàng</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>Mã Đơn Hàng</th>
							<th>Mã Khách Hàng</th>
							<th>Ngày đặt</th>
                            <th>Hình Thức Thanh Toán</th>
                            <th>Tổng Tiền</th>
                            <th>Tác vụ</th>	
						  </tr>
						</thead>
						<tbody>
                        <?php
                        foreach($ds_don_hang as $dh)
						{
							
							$arr=explode("-",$dh->ngay_dat);
							$nam=$arr[0];
							$thang=$arr[1];
							$ngay=$arr[2];
							$ngay_dat=$ngay."/".$thang."/".$nam;
							
						?>
						  <tr>
							<td><?php echo $dh->ma_don_hang?></td>
                            <td><?php echo $dh->ma_khach_hang?></td>
                            <td><?php echo $ngay_dat?></td>
                            <td><?php echo $dh->hinh_thuc_thanh_toan?></td>
                            <td><?php echo number_format($dh->tong_tien)?></td>
                            <td>
                            <button type="button" class="btn btn-warning" onClick="window.location='chi_tiet_don_hang.php?ma_don_hang=<?php echo $dh->ma_don_hang?>'"><i class="fa fa-eye"></i> Xem chi tiết</button>
                            </td>   
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