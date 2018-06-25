<div class="container">
	<div class="row">
    	<div class="col-md-12">
        <?php
        foreach($articales as $item)
		{
			$title=$item->getElementsByTagName("title");
			$link=$item->getElementsByTagName("link");
			$description=$item->getElementsByTagName("description");
			$guid=$item->getElementsByTagName("pubDate");
			
		?>
        	<article>
            	<a href="<?php echo $link->item(0)->nodeValue;?>">
                	<h2><?php echo $title->item(0)->nodeValue;?></h2>
                </a>    
                    <span>Người đăng:đang cập nhật</span>
                    <p style="text-align:justify>
                    	<?php echo $description->item(0)->nodeValue;?>
                    </p>
            </article>
            <hr>
         <?php
		}
		 ?>   
            
        </div>
    </div>
</div>