<?php

$pengaturid = $_POST["pengaturid"]; 
$pemetaanid = $_POST["pemetaanid"]; 
$tandon = $_POST["tandon"]; 
$pintuair = $_POST["pintuair"]; 
$meterair = $_POST["meterair"]; 
$pegawaiid = $_POST["pegawaiid"]; 

$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah=$_mysqli->query("update pengatur set id_pemetaan='".$pemetaanid."', tandon='".$tandon."', pintu_air='".$pintuair."',
 meter_air='".$meterair."', id_pegawai='".$pegawaiid."'	where id_pengatur='".$pengaturid."' "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('update succes');window.location='pengatur.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal update');window.location='update_pengatur.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>