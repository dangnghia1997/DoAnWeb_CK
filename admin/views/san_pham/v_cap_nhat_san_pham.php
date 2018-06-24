
<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Cập nhật sản phẩm</h2>
					</div>
                    <ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Sản phẩm</li>
									<li class="active">Cập nhật sản phẩm</li>
								</ol>
					
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Thông tin cập nhật:</h4>
						</div>
						<div class="forms">
								
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Thuộc loại</label>
											<div class="col-sm-8">
                                                <select name="ma_loai_san_pham" id="selector1" class="form-control1">
                                                	<option value="" selected="selected">---------Chọn một loại sản phẩm---------</option>
                                                <?php
                                                foreach($ds_loai_san_pham as $l)
												{
													if($san_pham->ma_loai==$l->ma_loai)
													{
												?>
                                                	<option value="<?php echo $l->ma_loai?>" selected="selected"><?php echo $l->ten_loai?></option>
                                                <?php
													}
													else
													{
												?>
                                                	<option value="<?php echo $l->ma_loai?>"><?php echo $l->ten_loai?></option>
                                                <?php
													}
												}
												?>
                                                </select>
                                            </div>
										</div>
                                        
                                        <div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Thuộc nhà cung cấp</label>
											<div class="col-sm-8">
                                                <select name="ma_nha_cung_cap" id="selector1" class="form-control1">
                                                	<option value="" selected="selected">---------Chọn một nhà cung cấp---------</option>
                                                <?php
                                                foreach($ds_nha_cung_cap as $ncc)
												{
													if($san_pham->ma_nha_cung_cap==$ncc->ma_nha_cung_cap)
													{
												?>
                                                	<option value="<?php echo $ncc->ma_nha_cung_cap?>" selected="selected" ><?php echo $ncc->ten_nha_cung_cap?></option>
                                                <?php
													}
													else
													{
												?>
                                                <option value="<?php echo $ncc->ma_nha_cung_cap?>" ><?php echo $ncc->ten_nha_cung_cap?></option>
                                                <?php
													}
												}
												?>
                                                </select>
                                            </div>
										</div>
										
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Tên sản phẩm</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Tên sản phẩm mới" name="ten_san_pham_moi" value="<?php echo $san_pham->ten_san_pham?>"/>
											</div>
										</div>
                                        
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Đơn giá</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="5000000" name="don_gia" value="<?php echo $san_pham->don_gia?>""/>
											</div>
										</div>
                                        
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Hình ảnh</label>
											<div class="col-sm-8">
												<input type="file" class="form-control1 input-lg" id="hinh" name="hinh"/>
                                                <img id="img_preview" class="hinh_san_pham nha_cung_cap" src="../public/layout/images/<?php echo $san_pham->hinh?>" alt="hinhsanpham">
                                                
											</div>
										</div>
                                        
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Mô tả</label>
											<div class="col-sm-8">
												<textarea id="mo_ta" name="mo_ta" class="ckeditor"><?php echo $san_pham->mo_ta?>"</textarea>
										</div>
										</div>
                                        <div class="form-group mb-n">
                                        	<div class="col-sm-7"></div>
                                        	<div class="col-sm-5">
                                            	<a href="ds_san_pham.php"><i class="fa fa-reply-all"></i> Về trang danh sách</a>
												<button type="submit" class="btn btn-default w3ls-button" name="btn_cap_nhat_san_pham">Cập nhật</button>
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