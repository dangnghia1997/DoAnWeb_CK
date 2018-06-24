
<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Cập Nhật Nhà Cung Cấp</h2>
					</div>
                    <ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Nhà Cung Cấp</li>
									<li class="active">Cập Nhật Nhà Cung Cấp</li>
								</ol>
					
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Thông tin cập nhật:</h4>
						</div>
						<div class="forms">
								
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
										
										
										
										
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Tên nhà cung cấp</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="tên nhà cung cấp.." name="ten_nha_cung_cap" value="<?php echo $nha_cung_cap->ten_nha_cung_cap?>"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Hình ảnh</label>
											<div class="col-sm-8">
												<input type="file" class="form-control1 input-lg" id="hinh" name="hinh" />
											</div>
										</div>
										<div class="col-md-4">
                                        	<img id="img_preview" class="hinh_san_pham nha_cung_cap" src="../public/layout/images/nha_cung_cap/<?php echo $nha_cung_cap->hinh?>" alt="hinhsanpham">
                                        </div>
                                        <div class="form-group mb-n">
                                        	<div class="col-sm-8"></div>
                                        	<div class="col-sm-4">
                                            	<a href="ds_nha_cung_cap.php"><i class="fa fa-reply-all"></i> Về trang danh sách</a>
												<button type="submit" class="btn btn-default w3ls-button" name="btn_cap_nhat_nha_cung_cap">Cập Nhật</button>
                                            </div>
                                            
										</div>
                                        
									</form>
								</div>
						</div>
					</div>
					
					
				</div>
				<!-- //input-forms -->
			</div>
		</div>
        
        
