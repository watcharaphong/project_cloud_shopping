<script language="javascript">

	Function closewin(){
		window.opener.location.reload();
	}
	
	$close = closewin();

</script>

<?php
session_start();
require('config/config.php');
$orderid = $_SESSION["Orders"];
$name1 = $_POST["name1"];
$name2 = $_POST["name2"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$muser = $_COOKIE["muser"];

if(isset($_POST['orderok'])){
	if(isset($_SESSION["cart_item"])){
		$item_total = 0;
	foreach ($_SESSION["cart_item"] as $item){
		$item_total +=($item["price"]*$item["quantity"]);
		$pricetotal = $item_total +($item_total*0.07);
		$procode = $item["code"];
		$unit = $item["quantity"];
		$sqlin = "INSERT INTO orderproduct (`id`, `ordersid`, `procode`, `ounit`, `oprice`)  VALUES('','$orderid','$procode','$unit','$item_total')";
		mysqli_query($link, $sqlin) or die (mysqli_error($link));
		$sqlup = "UPDATE tblproduct SET unit=(unit-$unit) WHERE code ='$procode'";
		mysqli_query($link, $sqlup) or die(mysqli_error($link));
		
	}
	}
	$sql = "INSERT INTO `orders` (`ordersid`, `pricetotal`, `tel`, `address`, `fname`, `lname`, `muser`, `time`,`status`) VALUES ('$orderid', '$pricetotal', '$tel', '$address', '$name1', '$name2', '$muser',CURRENT_TIMESTAMP,'ยังไม่ชำระเงิน');";
	mysqli_query($link, $sql) or die (mysqli_error($link));
	//echo "<center>ชำระเงินแล้วกำลังจัดส่งสินค้า<br></center>";
	unset($_SESSION["cart_item"]);
	unset($_SESSION["Orders"]);
	echo "<script>";
	echo "alert('ชำระเงินแล้วกำลังจัดส่งสินค้า');";
	echo "window.location='index.php'";
	echo "</script>";
	//echo '<script type="text/javascript">window.location="index.php";</script>';
	echo @$close;
	
}
	mysqli_close($link);
?>