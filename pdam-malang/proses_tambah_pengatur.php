<?php 

if (!empty($_POST["simpan"])) { /*jika penyimpanan data kosong */
	$_mysqli = new mysqli("localhost","root","","pdam"); /*databses */

	if($_mysqli->connect_error){
		die('<font color="red">Koneksi gagal</font> :<b>' .$_mysqli->connect_error. '</b>'); /*maka eror */
	}
 }	

$pengaturid = $_POST["pengaturid"]; 
$pemetaanid = $_POST["pemetaanid"]; 
$tandon = $_POST["tandon"]; 
$pintuair = $_POST["pintuair"]; 
$meterair = $_POST["meterair"]; 
$pegawaiid = $_POST["pegawaiid"]; 

$perintah=$_mysqli->query("insert into pengatur(id_pengatur,id_pemetaan,tandon,pintu_air,meter_air,id_pegawai)
	values('".$pengaturid."', '".$pemetaanid."', '".$tandon."', '".$pintuair."', '".$meterair."', '".$pegawaiid."') "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('tambah data succes');window.location='pengatur.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal tambah data ');window.location='tambah_pengatur.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>