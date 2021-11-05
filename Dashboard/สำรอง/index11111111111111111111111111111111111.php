
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

  <body class="fixed-nav sticky-footer bg-light" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">หน้าแรก</a>
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
              
              <span class="nav-link-text">
                ข้อมูลห้องพัก
              </span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="add_product.php">
              
              <span class="nav-link-text">
                ข้อมูลการเข้าพัก
    		</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="orders_product.php">
              
              <span class="nav-link-text">
                การจอง				  
	</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="เพิ่มสินค้า">
            <a class="nav-link" href="member.php">
             
              <span class="nav-link-text">
                หนักงาน				  
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
  

              </span>
  


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
              <a class="dropdown-item" href="#">
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

 
   
  
              </span>
            </a>
   
    
              </a>
            
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
          </li>รายชื่อพนักงาน</li>
        </ol>
<!-- Example Tables Card -->
<div class="card mb-3">
  <div class="card-header">
 <td><table height="113" align="center" class="table table-dark table-striped" >
                      <thead>
                        <tr>
                         
                          <th width="33" style="font-style: 10" scope="col">รหัส</th>
                          <th width="104" style="font-style: 10" scope="col">ชื่อ-สกุล</th>
                          <th width="61" style="font-style: 10" scope="col">ที่อยู่</th>
                          <th width="69" style="font-style: 10" scope="col">เบอร์</th>
                          <th width="118" style="font-style: 10" scope="col">เวลาเข้างาน</th>
                          <th width="110" style="font-style: 10" scope="col">เวลาเลิกงาน</th>
							<th width="99" style="font-style: 10" scope="col">วันทำงาน</th>
							<th width="135" style="font-style: 10" scope="col">ตำแหน่ง</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th style="font-style: 10" scope="row">1</th>
                          <td style="font-style: 10">Mark</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xxxxxxxx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
                        <tr>
                          <th style="font-style: 10" scope="row">2</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Thornton</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
                        <tr>
                          <th style="font-style: 10" scope="row">3</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">4</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">5</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">6</th>

                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">7</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">8</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">9</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">10</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
						                          <tr>
                          <th style="font-style: 10" scope="row">11</th>
                          <td style="font-style: 10">Jacob</td>
                          <td style="font-style: 10">Otto</td>
                          <td style="font-style: 10">09xxx</td>
                          <td style="font-style: 10">8:30</td>
                          <td style="font-style: 10">17:30</td>
                          <td style="font-style: 10">1/10/64</td>
                          <td width="135" style="font-style: 10">พนักงาน</td>
                        </tr>
					
                      </tbody>
                    </table>

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
