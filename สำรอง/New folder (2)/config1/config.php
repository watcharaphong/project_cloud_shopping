<?php
$server_name = "localhost";
$server_user = "root";
$server_pass = "12345678";
$server_db = "wed";

$link = mysqli_connect($server_name,$server_user,$server_pass,$server_db);

if (!$link) {
	die('Conect Error: ' .mysqli_connect_errno());
}
mysql_query($link,"set name utf8");

?>