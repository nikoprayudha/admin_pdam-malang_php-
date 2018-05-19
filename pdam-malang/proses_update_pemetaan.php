<?php

$pemetaanid = $_POST["pemetaanid"]; 
$wilayahid = $_POST["wilayahid"]; 
$lokasi = $_POST["lokasi"]; 
$kodepipa = $_POST["kodepipa"]; 
$status = $_POST["status"]; 
$alamat = $_POST["alamat"]; 

$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah=$_mysqli->query("update pemetaan set id_wilayah='".$wilayahid."', lokasi='".$lokasi."', kode_pipa='".$kodepipa."',
 status='".$status."', alamat='".$alamat."'	where id_pemetaan='".$pemetaanid."' "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('update succes');window.location='pemetaan.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal update');window.location='update_pemetaan.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>