
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
							<th>Quyền</th>
                            <?php 
							if($_SESSION['admin']['lv']==2) //Khi là admin mới hiện
							{
							?>
							<th>Hủy</th>
                            <?php
							}
							?>
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
                            <td><?php echo ($kh->trang_thai==0?"Chưa thanh toán":"Đã Thanh Toán")?>
                            <?php
                            if($kh->trang_thai==0)
							{
							?>
                            <button type="button" class="btn btn-success" onclick="var result = confirm('Bạn thực sự muốn thanh toán?');
if (result) {
    window.location='khach_hang_thanh_toan.php?ma_khach_hang=<?php echo $kh->ma_khach_hang;?>'
}">Thanh Toán</button>
                            <?php
							}
							?>
                            
                            </td>
                        	<td><?php echo ($kh->thanh_vien==0?"Khách":"Là Thành Viên")?></td>
                            <?php
                            if($_SESSION['admin']['lv']==2)//Khi là admin mới hiện
							{
							?>
                            <td>
                                
                                    <button type="button" class="btn btn-danger" onclick="var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='huy_khach_hang.php?ma_khach_hang=<?php echo $kh->ma_khach_hang;?>'
}">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                
                            </td>
                            <?php
							}
							?>
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