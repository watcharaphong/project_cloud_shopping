<script language="javascript">
function closewin(){
	window.opener.location.reload();
	
}
	#close=closewin();
</script>
<?php
require ('../config/config.php');
if(isset($_GET['cid'])) {
	$sql = "DELETE FROM `contact` WHERE  `contact`.`cid` ='$_GET[cid]'";
	mysqli_query($link, $sql) or die (mysqli_error($link));

    echo 	"<script>";
	echo	"alert('ลบข้อมูลแล้ว');";
	echo 	"window.location='a_contact.php'";
	echo 	"</script>";
	echo @$close;
}

mysqli_close($link);
?>


