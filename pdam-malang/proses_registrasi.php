<?php 

if (!empty($_POST["simpan"])) { /*jika penyimpanan data kosong */
	$_mysqli = new mysqli("localhost","root","","pdam"); /*databases */

	if($_mysqli->connect_error){
		die('<font color="red">Koneksi gagal</font> :<b>' .$_mysqli->connect_error. '</b>'); /*maka eror */
	}
 }	

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

$perintah=$_mysqli->query("insert into pegawai(id_pegawai,nama,jk,tmp_lahir,tgl_lahir,alamat,telepon,username,password,profesi)
					values('".$pegawaiid."', '".$nama."', '".$jk."', '".$tmplahir."', '".$tgllahir."', '".$alamat."'
					,'".$telepon."', '".$username."', '".$password."', '".$profesi."') "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('registrasi succes');window.location='login.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal registrasi ');window.location='registrasi_account.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>