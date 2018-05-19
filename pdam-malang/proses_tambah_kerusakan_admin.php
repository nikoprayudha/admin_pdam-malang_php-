<?php 

if (!empty($_POST["simpan"])) { /*jika penyimpanan data kosong */
	$_mysqli = new mysqli("localhost","root","","pdam"); /*databses */

	if($_mysqli->connect_error){
		die('<font color="red">Koneksi gagal</font> :<b>' .$_mysqli->connect_error. '</b>'); /*maka eror */
	}
 }	

$kerusakanid = $_POST["kerusakanid"]; 
$pemetaanid = $_POST["pemetaanid"]; 
$status = $_POST["status"]; 
$statuskerusakan = $_POST["statuskerusakan"]; 
$keterangan = $_POST["keterangan"]; 
$pegawaiid = $_POST["pegawaiid"]; 

$perintah=$_mysqli->query("insert into kerusakan(id_kerusakan,id_pemetaan,status,status_kerusakan,keterangan,id_pegawai)
	values('".$kerusakanid."', '".$pemetaanid."', '".$status."', '".$statuskerusakan."', '".$keterangan."', '".$pegawaiid."') "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('tambah data succes');window.location='kerusakan_admin.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal tambah data ');window.location='tambah_kerusakan_admin.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>