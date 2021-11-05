<?php
require('config/config.php');
	if(isset($_GET['muser'])){
		$id = $_GET['muser'];
	if(move_uploaded_file($_FILES["image"]["tmp_name"],"profile-images/".$id.".jpg")){
		
		
	$image = "profile-images/".$id.".jpg";
	$str = "UPDATE `member` SET `image` = '$image' WHERE `member`.`muser` = '$id';";	
		mysqli_query($link, $str);
			
			echo "<script>";
			echo "alert('อัพโหลดรูปภาพสำเร็จ');";
			echo "window.location='profile.php';";
			echo "</script>";
			echo "Copy/Upload Complete<br>";
		
		
	}else{
		echo "<script>";
			echo "alert('โปรดเลือกรูปถาพ');";
			echo "window.location='profile.php';";
			echo "</script>";
	}
	}
?>