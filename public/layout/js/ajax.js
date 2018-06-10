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

