<?php

class Mailer
{
   static function Gui_lien_he($tieu_de,$noi_dung)
   {	
   		require 'plugins/PHPMailer/PHPMailerAutoload.php';
		include("models/user_pass_mail.php");// chứa $username,$pass,$mail_nhan_xu_ly
	   $mail = new PHPMailer();
	   $mail ->IsSmtp();
	   $mail->CharSet = "UTF-8";  //Để gửi tin có unicode
	   $mail->isHTML(true); //Để gửi được thẻ HTML
	   
	   $mail ->SMTPAuth = true;
	   $mail ->SMTPSecure = 'tls';
	   $mail ->Host = "smtp.gmail.com";
	   $mail ->Port = 587; // or 587
	   //$mail ->IsHTML(true);
	   $mail ->Username = $username;
	   $mail ->Password = $pass;
	   $mail ->SetFrom("supfood2018@gmail.com");
	   $mail ->Subject = $tieu_de;
	   $mail ->Body = $noi_dung;
	   $mail ->AddAddress($mail_nhan_xu_ly);
	
	   if(!$mail->Send())
	   {
		   //echo "Lỗi gửi mail";
		   return false;
	   }
	   else
	   {
		   //echo "Mail gửi thành công";
		   return true;
	   } 
   }

}

	

   

