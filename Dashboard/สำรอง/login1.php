	<?php
		@session_start();
	?>
<!DOCTYPE html>
<html lang="en">

  <head>

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

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body class="bg-dark">
<div class="container">
<div class="card card-login mx-auto mt-5">
<div class="card-header"><center>SING IN YOUR ADMIN</center>

</div>
<div class="card-body">
	
<form action="checkd_login.php" class="aa-login-form" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control"  placeholder="Enter Username">
</div>
<div   class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<div class="form-check">
<label class="form-check-label">
<label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> 
Rememberme</label>
</label>
</div>
</div>
<button type="submit" name="login" class="btn btn-primary btn-block" >login</button>
	
</form>
</div>
</div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
