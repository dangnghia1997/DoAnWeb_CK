
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Nhà Cung Cấp</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									
									<li class="active">Danh sách Nhà Cung Cấp</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>Mã Nhà Cung Cấp</th>
							<th>Tên Nhà Cung Cấp</th>
							<th>Hình Ảnh</th>
                            <?php
                            if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
							{
							?>
                            <th>Cập Nhật</th>
                            <th>Xóa</th>  
                            <?php
							}
							?>
						  </tr>
						</thead>
						<tbody>
                        <?php
                        foreach($ds_nha_cung_cap as $ncc)
						{
						?>
						  <tr>
							<td><?php echo $ncc->ma_nha_cung_cap?></td>
                            <td><?php echo $ncc->ten_nha_cung_cap?></td>
                            <td>
                            	<img class="hinh_san_pham nha_cung_cap" src="../public/layout/images/nha_cung_cap/<?php echo $ncc->hinh?>" alt="hinhsanpham">
                            </td>
                            
                            <?php
                            if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
							{
							?>
                            <td>
                                <a href="capnhat_nha_cung_cap.php?ma_nha_cung_cap=<?php echo $ncc->ma_nha_cung_cap?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-wrench"></i>
                                    </button>
                                </a>
                            </td>
							<td>
                                
                                    <button type="button" class="btn btn-danger" onclick="var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='xoa_nha_cung_cap.php?ma_nha_cung_cap=<?php echo $ncc->ma_nha_cung_cap?>'
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