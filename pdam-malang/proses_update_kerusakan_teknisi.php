<?php
$kerusakanid = $_POST["kerusakanid"]; 
$pemetaanid = $_POST["pemetaanid"]; 
$status = $_POST["status"]; 
$statuskerusakan = $_POST["statuskerusakan"]; 
$keterangan = $_POST["keterangan"]; 
$pegawaiid = $_POST["pegawaiid"]; 

$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah=$_mysqli->query("update kerusakan set id_pemetaan='".$pemetaanid."', status='".$status."', status_kerusakan='".$statuskerusakan."', keterangan='".$keterangan."', id_pegawai='".$pegawaiid."'	where id_kerusakan='".$kerusakanid."' "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('update succes');window.location='kerusakan_teknisi.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal update');window.location='update_kerusakan_teknisi.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>