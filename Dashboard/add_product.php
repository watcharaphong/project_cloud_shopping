<?php
session_start();
if (empty($_COOKIE['auser'])) {
    echo 	"<script>";
	echo	"alert('Please login');";
	echo "window.location='login.php'";
	echo 	"</script>";
     exit;
}
?>
<?php
	//นำไฟล์ข้อมูลเข้า
require('../config/config.php');
if(isset($_POST['add_product'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
	$code = $_POST['code'];
	$type = $_POST['type'];
	$unit = $_POST['unit'];
//กำหนดตำแหน่งการ upload
	//$uploaddir = 'product-images/';
	//$uploadfile = $_FILES['image']['name'];
	//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
	
	//$uploaddir = "../product-images/".$_FILES["image"]["name"];
	//$uploadfile = $_FILES['image']['name'];
	//if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
	if(move_uploaded_file($_FILES["image"]["tmp_name"],"../product-images/".$code."."."jpg")){
		
	$image = "product-images/".$code."."."jpg";
	$str = "INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `tproid`, `unit`, `sale`) VALUES ('', '$name', '$code', '$image', '$price', '$type', '$unit', '')";
		mysqli_query($link, $str);
	
			echo "<script>";
			echo "alert('เพิ่มข้อมูลสำเร็จ');";
			echo "</script>";
			echo "Copy/Upload Complete<br>";
		
	}else{
			echo "<script>";
			echo "alert('เพิ่มข้อมูลไม่สำเร็จ');";
			echo "</script>";

	}
	
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
	<link rel="icon" href="../icon/logo-it.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>IT SHOP | ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">IT SHOP ADMIN</a>
		 <!--//<a <//?php
                  if(!empty($_COOKIE['auser'])){
                  echo "<li><a href='javascript:void(0)'>".$_COOKIE["auser"]."</a></li>";
                } ?>></a>-->

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-list"></i>
              <span class="nav-link-text">
                รายการสินค้า
              </span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="add_product.php">
              <i class="fa fa-fw fa-plus"></i>
              <span class="nav-link-text">
                เพิ่มสินค้า
    		</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="orders_product.php">
              <i class="fa fa-fw fa-shopping-bag"></i>
              <span class="nav-link-text">
                ออเดอร์สินค้า				  
	</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="member.php">
              <i class="fa fa-fw fa-user-circle"></i>
              <span class="nav-link-text">
                สมาชิก				  
              </span>
            </a>
          </li>
			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="a_contact.php">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="nav-link-text">
                Contact				  
              </span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="new-indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">!</span>
              </span>
            </a>

            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages Contact:</h6>
<?php
require('../config/config.php');
	$str = "SELECT * FROM contact";
	$rs = mysqli_query($link,$str);
		  $num=1;
	    while ($contact = mysqli_fetch_array($rs)){; 
?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="a_contact.php">
                <strong><?php echo "Member: ".$contact['cname'];?></strong>

                <div class="dropdown-message small"><?php echo "Subject: ".$contact['csubject'];?>!</div>
                <span class="small float-right text-muted"><?php echo $contact['ctime'];?></span> <hr>         
				
				</a>  
<?php $num++;
}
?>
              </a>
            </div>
          </li>
			
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">!</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Order:</h6>
 <?php
require('../config/config.php');
	$str = "SELECT * FROM orders";
	$rs = mysqli_query($link,$str);
		  $num=1;
	    while ($orders = mysqli_fetch_array($rs)){; 
?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="orders_product.php">
                <strong>Member: <?php echo $orders['muser'];?></strong>
                
                <div class="dropdown-message small">New Order: <?php echo $orders['ordersid'];?>!</div>
				<span class="small text-muted"><?php echo $orders['time'];?></span>
              </a>   
<?php $num++;
}
?>
    
              </a>
            </div>
          </li>
		
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="content-wrapper">
<div class="container-fluid">
<!-- Breadcrumbs -->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">เพิ่มสินค้า</li>
</ol>
<div class="container">
<form action="" method="post" enctype="multipart/form-data" 
      class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>เพิ่มสินค้าใหม่</legend>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="name">ประเภทสินค้า</label>
<div class="col-md-4">
<select class="form-control" name="type">
<?php
require('../config/config.php');
$str = "SELECT * FROM typeproduct";
$rs = mysqli_query($link,$str);
$num=1;
while ($data = mysqli_fetch_array($rs)) {
?>
<option value="<?php echo $data['tproid'];?>">
<?php echo $data['tproid'].".";?>
<?php echo $data['tproname'];?></option>
<?php } ?>
</select>
   <span class="help-block">กรอกรหัสสินค้า</span>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="name">รหัสสินค้า</label>
<div class="col-md-4">
<input id="name" name="code" type="text" 
       class="form-control input-md" required>
<span class="help-block">กรอกรหัสสินค้า</span>
</div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="name">ชื่อสินค้า</label>
<div class="col-md-4">
<input id="name" name="name" type="text" 
       class="form-control input-md" required>
<span class="help-block">กรอกชื่อสินค้า</span>
</div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="name">ราคา</label>
<div class="col-md-4">
<input id="name" name="price" type="text" 
       class="form-control input-md" required>
<span class="help-block">กรอกราคาสินค้า หน่วย/บาท</span>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="name">จำนวน</label>
<div class="col-md-4">
<input id="name" name="unit" type="text" 
       class="form-control input-md" required>
<span class="help-block">กรอกจำนวนสินค้า</span>
</div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" 
       for="name">รูปภาพสินค้า (250 x 300 px)</label>
<div class="col-md-4">
<input id="name" name="image" type="file" 
       class="form-control input-md" required>
<span class="help-block">เพิ่มรูปภาพ</span>
</div>
</div>
<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
<div class="col-md-4">
<button id="submit" name="add_product" 
        class="btn btn-success">บันทึกสินค้า</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->

    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; Your Website 2017</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SING OUT?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Do you want to log out? Yes/No.
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="logout.php">Yes</a>
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
