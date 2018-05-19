<?php

$pegawaiid = $_POST["pegawaiid"]; 
$nama = $_POST["nama"]; 
$jk = $_POST["jk"]; 
$tmplahir = $_POST["tmplahir"]; 
$tgllahir = $_POST["tgllahir"]; 
$alamat = $_POST["alamat"]; 
$telepon = $_POST["telepon"]; 
$username = $_POST["username"]; 
$password = $_POST["password"]; 
$profesi = $_POST["profesi"]; 

$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah=$_mysqli->query("update pegawai set nama='".$nama."', jk='".$jk."', tmp_lahir='".$tmplahir."', tgl_lahir='".$tgllahir."', 
	alamat='".$alamat."', telepon='".$telepon."', username='".$username."', password='".$password."', profesi='".$profesi."' 
	where id_pegawai='".$pegawaiid."' "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('update succes');window.location='pegawai.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal update');window.location='update_pegawai.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>