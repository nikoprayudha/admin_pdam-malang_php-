<?php
session_start();
if($_SESSION){
	if($_SESSION['profesi']=="Administrator")
	{
		header("Location: home_admin.php");
	}
	if($_SESSION['profesi']=="Teknisi")
	{
		header("Location: home_teknisi.php");
	}
}
include('proses_login.php'); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEM APLIKASI PDAM KOTA MALANG</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

   <body style="background-image: -webkit-gradient(
	linear,
	left top,
	left bottom,
	color-stop(0.36, #2C8394),
	color-stop(1, #63BDE6)
);
background-image: -o-linear-gradient(bottom, #2C8394 36%, #63BDE6 100%);
background-image: -moz-linear-gradient(bottom, #2C8394 36%, #63BDE6 100%);
background-image: -webkit-linear-gradient(bottom, #2C8394 36%, #63BDE6 100%);
background-image: -ms-linear-gradient(bottom, #2C8394 36%, #63BDE6 100%);
background-image: linear-gradient(to bottom, #2C8394 36%, #63BDE6 100%);">

	

		      <form class="form-login" role="form"  method="post">
		        <h2 class="form-login-heading">PDAM KOTA MALANG &nbsp;&nbsp;&nbsp;<img src="assets/img/logo.jpg" class="img-circle" width="60"></h2>
		        <div class="login-wrap">
		        	 <center>LOGIN</center>
		        	 <br>
		        	<form action="proses_login.php" method="post"> 
		            <input type="text" class="form-control" placeholder="User ID" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            <br>
		            <select class="form-control" name="profesi">
		            	<option>----Pilih Login User----</option>
		            	<option value-"1">Administrator</option>
		            	<option value="2">Teknisi</option>
		            </select>
		            <br><br><br><br>
		            <button class="btn btn-theme btn-block" type="submit" name="submit">
		            	<i class="fa fa-lock"></i>SIGN IN</button>
		            <hr>
					</form>
					<center><a href="registrasi_account.php">Create account Sam !!!</a></center>
		        </div>
				<center><h3><?php echo $error; ?></h3></center>



  </body>
</html>
