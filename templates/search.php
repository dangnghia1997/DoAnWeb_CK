<div class="col-sm-4">
                	<div class="single-sidebar">
                    <br />
                    <br />
                	<div class="ui-widget">
                        <form action="san_pham.php?page=1" method="post">
                            <input type="text" id="search" name="search" placeholder="Tìm kiếm...">
                            <input type="submit" value="Tìm kiếm" name="btnTim">
                        </form>
                    </div>    
                    </div>
                </div>
<script>
  $( function() {
    var du_lieu = <?php echo json_encode($mang_chua_ten_san_pham); ?>;
	//console.log(du_lieu);
    $( "#search" ).autocomplete({
      source: du_lieu
    });
  } );
  </script>