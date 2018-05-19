<?php 

if (!empty($_POST["simpan"])) { /*jika penyimpanan data kosong */
	$_mysqli = new mysqli("localhost","root","","pdam"); /*databses */

	if($_mysqli->connect_error){
		die('<font color="red">Koneksi gagal</font> :<b>' .$_mysqli->connect_error. '</b>'); /*maka eror */
	}
 }	


$wilayahid = $_POST["wilayahid"]; 
$kode = $_POST["kode"]; 


$perintah=$_mysqli->query("insert into wilayah(id_wilayah,kode_wilayah)
					values('".$wilayahid."', '".$kode."' ) "); /*query proses tambah*/

echo $_mysqli ->query($perintah); /*mengambil dari perintah*/
	if($perintah == true ){ /*jika perintah benar */
	
	echo "<script>alert('tambah data succes');window.location='wilayah.php'</script>";/*data berhasil disimpan */
	}
	else {
	echo "<script>alert('gagal tambah data ');window.location='tambah_wilayah.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
?>