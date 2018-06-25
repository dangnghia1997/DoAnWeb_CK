
<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Cập nhật User</h2>
					</div>
                    <ol class="breadcrumb">
									<li><a href="index_quan_tri.php">Trang Chủ</a></li>
									<li class="active">Users</li>
									<li class="active">Cập nhật Users</li>
								</ol>
					
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>Thông tin cập nhật:</h4>
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
												<input type="password" value="<?php echo $user[0]['password']?>" class="form-control1 input-lg" id="largeinput" placeholder="password" name="password"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Họ tên</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $user[0]['ten_day_du']?>" class="form-control1 input-lg" id="largeinput" placeholder="họ và tên" name="ho_ten"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Số điện thoại</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $user[0]['so_dien_thoai']?>" class="form-control1 input-lg" id="largeinput" placeholder="(+84)--------" name="so_dien_thoai"/>
											</div>
										</div>
                                        <div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Địa chỉ</label>
											<div class="col-sm-8">
												<input type="text" value="<?php echo $user[0]['dia_chi']?>" class="form-control1 input-lg" id="largeinput" placeholder=" đường ,phường, quận, tp" name="dia_chi"/>
											</div>
										</div>
                                        <div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Phân quyền</label>
											<div class="col-sm-8">
                                            <?php 
											if($user[0]['quyen'] == 0)
											{
											?>
												<div class="radio block">
                                                	<label>
                                                    	<input type="radio" checked="checked" name="quyen" value="0">Thành viên</label>
                                                </div>
                                                <div class="radio block">
                                                    <label>
                                                        <input type="radio" name="quyen"value="1" > Nhân Viên
                                                    </label>
                                                </div>
                                            <?php
											}
											else
											{
											?>
                                            	<div class="radio block">
                                                	<label>
                                                    	<input type="radio" name="quyen" value="0">Thành viên</label>
                                                </div>
												<div class="radio block">
                                                    <label>
                                                        <input type="radio" checked="checked" name="quyen"value="1" > Nhân Viên
                                                    </label>
                                                </div>
											</div>
                                            <?php
											}
											?>
										</div>
                                        
                                        <div class="form-group mb-n">
                                        	<div class="col-sm-7"></div>
                                        	<div class="col-sm-5">
                                            	<a href="ds_users.php"><i class="fa fa-reply-all"></i> Về trang danh sách</a>
												<button type="submit" class="btn btn-default w3ls-button" name="btn_cap_nhat_user">Cập nhật</button>
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