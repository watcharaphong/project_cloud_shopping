<?php
					 
require('config/config.php');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tel = $_POST['tel'];
	$memail = $_POST['memail'];
	$maddress = $_POST['maddress'];
	
	if(isset($_GET['muser'])){
		
	$str = "UPDATE `member` SET `fname` = '$fname', `lname` = '$lname', `tel` = '$tel', `memail` = '$memail', `maddress` = '$maddress' WHERE `member`.`muser` = '$_GET[muser]';";
		mysqli_query($link, $str);
	
			echo "<script>";
			echo "alert('แก้ไขข้อมูลสำเร็จ');";
			echo "window.location='profile.php';";
			echo "</script>";
	}

?>