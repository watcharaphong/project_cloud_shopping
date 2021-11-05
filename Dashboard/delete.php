<script language="javascript">
function closewin(){
	window.opener.location.reload();
	
}
	#close=closewin();
</script>
<?php
require ('../config/config.php');
//ตรวจสอบค่าที่ส่งมา
if(isset($_GET['code'])) {
	// คำสั่งลบแถวในตาราง โดยใช้ code เป็น pimaiy key
	$sql = "DELETE FROM `tblproduct` WHERE code ='$_GET[code]'";
	mysqli_query($link, $sql) or die (mysqli_error($link));
//ลบรูปภาพใน folder 
	@unlink("../product-images/".$_GET['code'].".".'jpg');
	echo "<script>";
	echo "alert('ลบข้อมูลแล้ว!');";
	echo "window.location='index.php'";
	echo "</script>";
	
	
	echo @$close;
}
mysqli_close($link);
?>


