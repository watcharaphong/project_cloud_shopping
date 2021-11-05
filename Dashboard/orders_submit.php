
<script language="javascript">
function closewin(){
	window.opener.location.reload();
	self.close();
	
}
	$close = closewin();
</script>
<?php
require('../config/config.php');
$stas = $_POST['status'];

	if(isset($_GET['ordersid'])){
		$sql = "UPDATE `orders` SET `status` = '$stas' WHERE `orders`.`ordersid` = $_GET[ordersid]";

		mysqli_query($link,$sql) or die (mysqli_error($link));
		echo "<script>";
		echo "alert('แก้ไขข้อมูลสำเร็จ');";
		echo "window.location='orders_product.php'";
		echo "</script>";
		echo @$close;
	
}
mysqli_close($link);
?>


