<?php
//ตรวจสอบการเข้าระบบ
function chklogin($ser,$pas){

}
	//ดึงข้อมูลสมาชิก
	function getUser($user){
		$sql = "SELECT * FROM members WHERE mUser='$user'";
		$rs = mysqli_query($link,$sql)or die(mysqli_errno($link));
	}

?>
