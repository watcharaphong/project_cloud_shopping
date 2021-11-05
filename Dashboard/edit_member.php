
<script language="javascript">
function closewin(){
	window.opener.location.reload();
	self.close();
	
}
	$close = closewin();
</script>
<?php
require('../config/config.php');
$pass = $_POST['pass'];
	
	if(isset($_GET['muser'])){
		$sql = "UPDATE `member` SET `mpassword` = '$pass' WHERE `member`.`muser` = '{$_GET['muser']}'";

		mysqli_query($link,$sql) or die (mysqli_error($link));
		echo "<script>";
		echo "alert('แก้ไขข้อมูลแล้ว!');";
		echo "window.location='member.php'";
		echo "</script>";
		echo @$close;
	}

mysqli_close($link);
?>
