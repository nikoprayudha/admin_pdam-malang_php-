<?php 

if (!empty($_POST["simpan"])) { /*jika penyimpanan data kosong */
	$_mysqli = new mysqli("localhost","root","","pdam"); /*databses */

	if($_mysqli->connect_error){
		die('<font color="red">Koneksi gagal</font> :<b>' .$_mysqli->connect_error. '</b>'); /*maka eror */
	}
 }	

$pemetaanid = $_POST["pemetaanid"]; 
$wilayahid = $_POST["wilayahid"]; 
$lokasi = $_POST["lokasi"]; 
$kodepipa = $_POST["kodepipa"]; 
$status = $_POST["status"]; 
$alamat = $_POST["alamat"]; 

$perintah=$_mysqli->query("insert into pemetaan(id_pemetaan,id_wilayah,lokasi,kode_pipa,status,alamat)
	values('".$pemetaanid."', '".$wilayahid."', '".$lokasi."', '".$kodepipa."', '".$status."', '".$alamat."') "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('tambah data succes');window.location='pemetaan.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal tambah data ');window.location='tambah_pemetaan.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>