<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Thông Tin ADMIN</h2>
					</div>
                    <ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Thông tin Admin</li>
									
								</ol>
					
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Thông tin Admin:</h4>
						</div>
						<div class="forms">
								
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post">
										
										
										
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Email</label>
											<div class="col-sm-8">
												<input type="email" value="<?php echo $user[0]['email']?>" class="form-control1 input-lg" id="largeinput" placeholder="email cần tạo" name="email"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control1 input-lg" value="<?php echo $user[0]['password']?>" id="largeinput" placeholder="password" name="password"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Họ tên</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" value="<?php echo $user[0]['ten_day_du']?>" placeholder="họ và tên" name="ho_ten"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Số điện thoại</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" value="<?php echo $user[0]['so_dien_thoai']?>" placeholder="(+84)--------" name="so_dien_thoai"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Địa chỉ</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" value="<?php echo $user[0]['dia_chi']?>" placeholder=" đường ,phường, quận, tp" name="dia_chi"/>
											</div>
										</div>
                                        
                                        
                                        <div class="form-group mb-n">
                                        	<div class="col-sm-7"></div>
                                        	<div class="col-sm-5">
                                            	<a href="index_quan_tri.php"><i class="fa fa-reply-all"></i> Về trang quản trị</a>
												<button type="submit" class="btn btn-default w3ls-button" name="btn_luu_tt_admin">Lưu</button>
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