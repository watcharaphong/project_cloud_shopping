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
	require('../config/config.php');
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
		<!--<a </?php
                  if(!empty($_COOKIE['auser'])){
                  echo "<li><a href='javascript:void(0)'>".$_COOKIE["auser"]."</a></li>";
                } ?>> </a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            </a>
          </li>
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
          <li class="breadcrumb-item active">สมาชิก</li>
        </ol>
<!-- Example Tables Card -->
<div class="card mb-3">
  <div class="card-header">
     <i class="fa fa-table"></i>
     รายการสมาชิก
</div>
  <div   class="card-body">
  <div   class="table-responsive">
  <table class="table table-bordered" width="100%" 
         id="dataTable" cellspacing="0">
<thead>
<tr>
 <th>#</th>
	<th>รูปภาพ</th>
   <th>ชื่อผู้ใช้</th>
   <th>ชื่อ-สกุล</th>
  <th>อีเมลล์</th>
	<th>เบอร์โทร</th>
	<th>รหัสผ่าน</th>
	<th>จัดการ</th>
</tr>
</thead>
<tfoot>
<tr>
 <th>#</th>
	<th>รูปภาพ</th>
   <th>ชื่อผู้ใช้</th>
   <th>ชื่อ-สกุล</th>
  <th>อีเมลล์</th>
	<th>เบอร์โทร</th>
	<th>รหัสผ่าน</th>
	<th>จัดการ</th>
</tr>
</tfoot>
<tbody>
<?php $str = "SELECT * FROM `member`";
      $rs = mysqli_query($link,$str);
      $num=1;
      while ($data = mysqli_fetch_array($rs)) {
?>
      <tr>
        <td><?php echo $num;?></td>
		<td><img src="../<?php echo $data['image'];?>" 
                 width="50" height="50"></td>
        <td><?php echo $data['muser'];?></td>
		<td><?php echo $data['fname']." ".$data['lname'];?></td>
        <td><?php echo $data['memail'];?></td>
		<td><?php echo $data['tel'];?></td>
	<td>
	  <form method="post" action="edit_member.php?muser=<?=$data['muser'];?>">
		<input id="name"  name="pass" type="text" 
			   value="<?php echo $data['mpassword'];?>"  required="">
		<button class="btn btn-success" type="submit">ยันยัน</button>
		  </form>
		</td>		  
		  <td>
			  
			<center><a class="btn btn-danger" href="JavaScript:if(confirm('ลบผู้ใช้รายนี้ ?')==true)
                   JavaScript:window.location='delete_member.php?muser=<?=$data['muser'];?>',
                   '',400,320" role="button">ลบ</a><br></center>
			</td>
    </tr>
<?php $num++;
}
?>
     </tbody>
     </table>
   </div>
</div>
<div class="card-footer small text-muted">
รายการสินค้าทั้งหมด
</div>
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
          <small>Copyright &copy; TOP SHOP 2017</small>
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
            <h5 class="modal-title" id="exampleModalLabel">SING OUT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Do you want to log out? Yes/No.
          </div>
          <div class="modal-footer">
			  <a class="btn btn-primary" href="logout.php">Yes</a>
            <button type="button"  class="btn btn-secondary" data-dismiss="modal">No</button>
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
