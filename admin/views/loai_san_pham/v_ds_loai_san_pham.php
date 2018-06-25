
<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Loại Sản Phẩm</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Loại sản phẩm</li>
									<li class="active">Danh sách Loại sản phẩm</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>STT</th>
							<th>Mã loại</th>
							<th>Tên Loại</th>
                            <?php
                            if($_SESSION['admin']['lv']==2) //Khi admin mới hiện
							{
							?>
							<th>Cập nhật</th>
							<th>Xóa</th>
							<?php
							}
							?>
						  </tr>
						</thead>
						<tbody>
                        <?php 
						$i=0;
						foreach($ds_loai_san_pham as $loai_san_pham)
						{	
						?>
                       
						  <tr>
							<td><?php echo ++$i;?></td>
							<td><?php echo $loai_san_pham->ma_loai;?></td>
							<td><?php echo $loai_san_pham->ten_loai;?></td>
                            
                            
                            <?php
                            if($_SESSION['admin']['lv']==2)//Khi admin mới hiện
							{
							?>
							<td>
                                <a href="capnhat_loai_san_pham.php?ma_loai=<?php echo $loai_san_pham->ma_loai;?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-wrench"></i>
                                    </button>
                                </a>
                            </td>
							<td>
                                
                                    <button type="button" class="btn btn-danger" onclick="var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='xoa_loai_san_pham.php?ma_loai=<?php echo $loai_san_pham->ma_loai;?>'
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