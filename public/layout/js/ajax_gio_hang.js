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
			dataType:'json',
			success: function(data)
			{
				//alert("Số lượng: "+data['sl']+"\n Thành tiền: "+data['tt']);
				$('span.cart-amunt').html(data['tt']+"₫"); // thay đổi thành tiền ở ô giỏ hàng
				$('span.product-count').html(data['sl']);	 //thay đổi số lượng ở ô giỏ hàng
			},
			error:function(error)
			{
				alert(error.statusText);
			}
		}
		);
		return false;
    });//click
});//ready