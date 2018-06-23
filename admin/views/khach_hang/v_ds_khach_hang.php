
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Khách hàng</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									
									<li class="active">Danh sách Khách hàng</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>STT</th>
							<th>Mã Khách Hàng</th>
							<th>Họ Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Ghi Chú</th>
							<th>Trạng Thái</th>
							<th>Thành Viên</th>
							
						  </tr>
						</thead>
						<tbody>
                        <?php
						$i=0;
                        foreach($ds_khach_hang as $kh)
						{
						?>
						  <tr>
							<td><?php echo ++$i?></td>
                            <td><?php echo $kh->ma_khach_hang?></td>
                            <td><?php echo $kh->ten_khach_hang?></td>
                            <td><?php echo $kh->email?></td>
                            <td><?php echo $kh->dia_chi?></td>
                            <td><?php echo $kh->so_dien_thoai?></td>
                            <td><?php echo $kh->ghi_chu?></td>
                            <td><?php echo ($kh->trang_thai==0?"Chưa thanh toán":"Đã Thanh Toán")?></td>
                        	<td><?php echo ($kh->thanh_vien==0?"Khách":"Là Thành Viên")?></td>
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