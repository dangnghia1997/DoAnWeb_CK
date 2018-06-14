<div class="brands-area">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Nhà Cung Cấp</h2>
                        <div class="brand-list">
                        <?php
                        foreach($danh_sach_nha_cung_cap as $nha_cung_cap)
						{
						?>
                        	<a href="san_pham.php?ma_nha_cung_cap=<?php echo $nha_cung_cap->ma_nha_cung_cap;?>">
                            	<img src="public/layout/images/nha_cung_cap/<?php echo $nha_cung_cap->hinh;?>" alt="">
                            </a>
                         <?php
						}
						 ?>                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>