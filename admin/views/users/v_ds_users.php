
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Users</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Users</li>
									<li class="active">Danh sách Users</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>STT</th>
							<th>ID</th>
							<th>Email</th>
                            <th>Họ Tên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Quyền</th>
							<th>Cập nhật</th>
							<th>Xóa</th>
							
						  </tr>
						</thead>
						<tbody>
                        <?php
							$i=0;
                        foreach($ds_user as $u)
						{
							
						?>
						  <tr>
							<td><?php echo ++$i;?></td>
							<td><?php echo $u['id']?></td>
							<td><?php echo $u['email']?></td>
                            <td><?php echo $u['ten_day_du']?></td>
                            <td><?php echo $u['so_dien_thoai']?></td>
                            <td><?php echo $u['dia_chi']?></td>
                            <td><?php echo ($u['quyen']==0?"Thành Viên":"Quản Lý");?></td>
							<td>
                                <a href="capnhat_users.php?id=<?php echo $u['id']?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-wrench"></i>
                                    </button>
                                </a>
                            </td>
							<td>
                                
                                    <button type="button" class="btn btn-danger" onclick="var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='xoa_users.php?id=<?php echo $u['id']?>'
}">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                
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