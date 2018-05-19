<?php

$error=''; 

include "connection.php";
if(isset($_POST['submit']))
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$profesi		= $_POST['profesi'];
					
	$query = mysqli_query($connection, "SELECT * FROM pegawai WHERE username='$username' AND password='$password'");
	if(mysqli_num_rows($query) == 0)
	{
		$error = "Username or Password  Tidak Di Temukan";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['profesi'] = $row['profesi'];
		
		if($row['profesi'] == "Administrator" && $profesi=="1")
		{
			echo "<script>alert('Login succes');window.location='home_admin.php'</script>";
		}
		else if($row['profesi'] =="Teknisi" && $profesi=="2")
		{	
			echo "<script>alert('Login succes');window.location='home_teknisi.php'</script>";
		}
		else
		{
			$error = "Failed Login";
		}
	}
}

			
?>