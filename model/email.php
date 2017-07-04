<?php

require_once "Smtp.class.php";

class email extends spController
{	
	function send(){
		//******************** 配置信息 ********************************
	$smtpserver = "mail.mobiweb.com.hk";//SMTP服务器
	$smtpserverport =26;//SMTP服务器端口
	$smtpusermail = "enquiry@mobiweb.com.hk";//SMTP服务器的用户邮箱
	$smtpemailto = "459291532@qq.com";//发送给谁
	$smtpuser = "enquiry";//SMTP服务器的用户帐号(或填写new2008oh@126.com，这项有些邮箱需要完整的)
	$smtppass = "Enquiry@123456";//SMTP服务器的用户密码
	$mailtitle = "测试";//邮件主题
	$mailcontent = "<h1>Hello World!</h1>";//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = true;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
		echo "<a href='index.html'>点此返回</a>";
		exit();
	}
	echo "恭喜！邮件发送成功！！";
	echo "<a href='index.html'>点此返回</a>";
	echo "</div>";
	}

	// function send(){
	// 	//******************** 配置信息 ********************************
	// $smtpserver = "smtp.qq.com";//SMTP服务器
	// $smtpserverport =465;//SMTP服务器端口
	// $smtpusermail = "459291532@qq.com";//SMTP服务器的用户邮箱
	// $smtpemailto = "1794511213@qq.com";//发送给谁
	// $smtpuser = "459291532";//SMTP服务器的用户帐号(或填写new2008oh@126.com，这项有些邮箱需要完整的)
	// $smtppass = "lzhhctqypdwfbibc";//SMTP服务器的用户密码
	// $mailtitle = "测试";//邮件主题
	// $mailcontent = "<h1>Hello World!</h1>";//邮件内容
	// $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	// //************************ 配置信息 ****************************
	// $smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	// $smtp->debug = true;//是否显示发送的调试信息
	// $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	// echo "<div style='width:300px; margin:36px auto;'>";
	// if($state==""){
	// 	echo "对不起，邮件发送失败！请检查邮箱填写是否有误。";
	// 	echo "<a href='index.html'>点此返回</a>";
	// 	exit();
	// }
	// echo "恭喜！邮件发送成功！！";
	// echo "<a href='index.html'>点此返回</a>";
	// echo "</div>";
	// }
}
?>