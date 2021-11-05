
<script language="javascript">
function closewin(){
	window.opener.location.reload();
	self.close();
	
}
	$close = closewin();
</script>
<?php
require('../config/config.php');
$unit = $_POST['unit'];
	
	if(isset($_GET['id'])){
		$sql = "UPDATE `tblproduct` SET `unit` = $unit WHERE `tblproduct`.`id` = $_GET[id]";
		mysqli_query($link,$sql) or die (mysqli_error($link));
		
		echo "<script>";
		echo "alert('แก้ไขข้อมูลสำเร็จ');";
		echo "window.location='index.php'";
		echo "</script>";
		echo @$close;
	
	}

mysqli_close($link);
?>
