<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Cập nhật loại sản phẩm</h2>
					</div>
                    <ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Loại sản phẩm</li>
									<li class="active">Cập nhật loại sản phẩm</li>
								</ol>
					
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Thông tin tạo mới:</h4>
						</div>
						<div class="forms">
								
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post">
										
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Thuộc</label>
											<div class="col-sm-8">
                                                <select name="ma_loai_cha" id="selector1" class="form-control1">
                                                	<option value="0" selected="selected">Không thuộc loại nào</option>
                                                <?php
                                                foreach($ds_loai_san_pham as $loai)
												{
													if($loai_san_pham->ma_loai_cha == $loai->ma_loai)
													{
												?>
                                                    <option value="<?php echo $loai->ma_loai;?>" selected="selected"><?php echo $loai->ten_loai;?></option>
                                                    
                                               	<?php
													}
													else
													{
												?>
                                                <option value="<?php echo $loai->ma_loai;?>"><?php echo $loai->ten_loai;?></option>
                                                <?php
													}
												}
												?>
                                                </select>
                                            </div>
										</div>
										
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Tên loại sản phẩm</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Tên loại sản phẩm mới" value="<?php echo $loai_san_pham->ten_loai;?>" name="ten_san_pham_moi"/>
											</div>
										</div>
                                        
                                        <div class="form-group mb-n">
                                        	<div class="col-sm-8"></div>
                                        	<div class="col-sm-4">
                                            	<a href="ds_loai_san_pham.php"><i class="fa fa-reply-all"></i> Về trang danh sách</a>
												<button type="submit" class="btn btn-default w3ls-button" name="btn_sua_loai_san_pham">Cập nhật</button>
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