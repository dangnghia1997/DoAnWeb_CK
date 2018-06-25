
<div class="main-grid">
	<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Danh Sách Sản Phẩm</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  	<ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Sản phẩm</li>
									<li class="active">Danh sách Sản phẩm</li>
								</ol>
					    <table id="table">
						<thead>
						  <tr>
							<th>MSP</th>
							<th>ML</th>
							<th>MNCD</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Đơn Giá</th>
                            <th>Mô tả</th>
                            <?php
                            if($_SESSION['admin']['lv']==2)//khi admin mới hiện
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
                       foreach($ds_san_pham as $sp)
					   {
					   ?>
						  <tr>
							<td><?php echo $sp->ma_san_pham?></td>
							<td><?php echo $sp->ma_loai?></td>
							<td><?php echo $sp->ma_nha_cung_cap?></td>
                            <td><?php echo $sp->ten_san_pham?></td>
							<td>
							<img class="hinh_san_pham" src="../public/layout/images/<?php echo $sp->hinh?>" alt="hinhsanpham">
                            </td>
							<td><?php echo number_format($sp->don_gia)?></td>
                            <td><?php echo $sp->mo_ta?></td>
                            
                            <?php
                            if($_SESSION['admin']['lv']==2)//Khi admin mới hiện ra
							{
							?>
							<td>
                                <a href="capnhat_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham;?>">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa fa-wrench"></i>
                                    </button>
                                </a>
                            </td>
							<td>
                                
                                    <button type="button" class="btn btn-danger" onclick="var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='xoa_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham;?>'
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
<div class="container">        
    <div class="row">
        <div class="col-md-12">
            <div class="product-pagination text-center">
                <?php echo $phan_trang;?>  
            </div>
        </div>     
    </div>
    <br /> 
</div>
      

