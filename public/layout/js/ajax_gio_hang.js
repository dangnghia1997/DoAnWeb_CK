// JavaScript Document

$(document).ready(function() {
    $("a.add-to-cart-link,a.add_to_cart_button,button.add_to_cart_button").click(function() {
        var $key=$(this).attr("id");
		var $soluonginput="#soluong"+$key;
		var $soluong=$($soluonginput).val();
		var $dongiainput="#dongia"+$key;
		var $dongia=$($dongiainput).val();
		//console.log($dongia);
		
		var form_data={
			id      : $key,
			dongia  : $dongia,
			soluong : $soluong,	
		};
		$.ajax(
		{
			url:"mua_hang.php",
			type:'POST',
			data:form_data,
			dataType:"json",
			success: function()
			{
				
			}
		}
		);
    });
});