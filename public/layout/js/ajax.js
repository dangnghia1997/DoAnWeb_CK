// JavaScript Document

function Xl_ajax_tinh_thanh(id_ma_tinh)
{
	//console.log(id_ma_tinh);
	var tt=document.getElementById("quan_huyen");
	
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","xl_ajax_tinh_thanh.php");
	
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200 && xmlhttp.readyState==4)
		{
			tt.innerHTML=xmlhttp.responseText;
		}	
	}
	
	var data=new FormData();
	data.append("id_ma_tinh",id_ma_tinh);
	xmlhttp.send(data);	
}


function XL_ajax_xoa_mat_hang(ma_san_pham,don_gia)
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("POST","xl_ajax_xoa_mat_hang.php");
	
	xmlhttp.onreadystatechange=function()
	{
		if(xmlhttp.status==200 && xmlhttp.readyState==4)
		{
			window.location.reload(true);//load trang để sản phẩm session_gio hang cập nhật lại, khỏi cần jquery
		}	
	}
	
	var data=new FormData();
	data.append("ma_san_pham",ma_san_pham);
	data.append("don_gia",don_gia);
	xmlhttp.send(data);	
}

