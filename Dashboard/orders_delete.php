<script language="javascript">
function closewin(){
	window.opener.location.reload();
	
}
	#close=closewin();
</script>
<?php
require ('../config/config.php');
if(isset($_GET['ordersid'])) {
	$sql = "DELETE FROM `orders` WHERE  `orders`.`ordersid` ='$_GET[ordersid]'";
	mysqli_query($link, $sql) or die (mysqli_error($link));

}
	$sql = "DELETE FROM `orderproduct` WHERE  `orderproduct`.`ordersid` ='$_GET[ordersid]'";
	mysqli_query($link, $sql) or die (mysqli_error($link));
    echo 	"<script>";
	echo	"alert('ลบข้อมูลแล้ว');";
	echo 	"window.location='orders_product.php'";
	echo 	"</script>";
	echo @$close;


mysqli_close($link);
?>


