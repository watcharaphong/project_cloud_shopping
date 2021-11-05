<script language="javascript">
function closewin(){
	window.opener.location.reload();
	
}
	#close=closewin();
</script>
<?php
require ('../config/config.php');
//ตรวจสอบค่าที่ส่งมา
if(isset($_GET['muser'])) {
	// คำสั่งลบแถวในตาราง โดยใช้ muser เป็น pimaiy key
	$sql = "DELETE FROM `member` WHERE muser ='$_GET[muser]'";
	mysqli_query($link, $sql) or die (mysqli_error($link));
//ลบรูปภาพใน folder การเพิ่มรูปในกรณีนี้ จะบันทึกเป็น 	Array ในการลบจะต้องกำหนดเป็น Arrayด้วย
	@unlink("../profile-images/".$_GET['muser'].".".'jpg');
	echo 	"<script>";
	echo	"alert('ลบข้อมูลแล้ว');";
	echo 	"window.location='member.php'";
	echo 	"</script>";
	echo @$close;
}
mysqli_close($link);
?>


