<?php

$wilayahid = $_POST["wilayahid"]; 
$kode = $_POST["kode"]; 

$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah=$_mysqli->query("update wilayah set kode_wilayah='".$kode."' where id_wilayah='".$wilayahid."' "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('update succes');window.location='wilayah.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal update');window.location='update_wilayah.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>