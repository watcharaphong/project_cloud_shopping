<?php
require('config/config.php');
if (isset($_POST['register'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	$chk_usr = "SELECT muser FROM member WHERE muser = '{$user}'";
	$rs = mysqli_query($link,$chk_usr);
	$usr_row = mysqli_num_rows($rs);
	
	if($usr_row > 0){
		// $usr_row ไม่มีคำว่างหรือ username มีอยู่แล้วจะทำการแจ้งเตือน
		echo 	"<script>";
		echo	"alert('ชื่อผู้ใช้งานนี้อยู่ในระบบแล้ว');";
		echo	"window.history.back();";
		echo	"</script>";
		
	}else{
		// ถ้าไม่มี username นี้อยู่จะทำการบันทึกข้อมูล
		$str = 	"INSERT INTO member (mid, muser, mpassword) VALUES (NULL, '$user', '$pass');";
		mysqli_query($link, $str);
		
		echo	"<script>";
		echo	"alert('สมัครสมาชิกเรียบร้อย');";
		echo	"window.location='login.php';";
		echo	"</script>";
	}
}
?>