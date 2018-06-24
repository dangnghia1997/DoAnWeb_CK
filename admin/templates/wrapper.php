<section class="wrapper scrollable">
		<?php include("user-menu.php")?>
		<?php include("title-bar.php")?>
        <div class="main-content">
		  	<?php
            	if(isset($view))
				{
					include($view);	
				}
			?><!--view -->
        </div>
		<!-- footer -->
		<?php include("footer.php")?>
		<!-- //footer -->
	</section>
	<script src="public/layout/js/bootstrap.js"></script>
	<script src="public/layout/js/proton.js"></script>
    <script src="public/layout/js/preview_img.js"></script>
    
</body>
</html>