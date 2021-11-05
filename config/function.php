<?php
// ตรวจสอบการเข้าระบบ
function chklogin($muser,$mpass){

  }

  //ดึงข้อมูลสมาชิก
  function getUser($muser){
    $sql = "SELECT * FROM members WHERE muser='$muser'";
    $rs  = mysqli_query($link,$sql)or die(mysqli_error($link));

  }
  
 ?>
