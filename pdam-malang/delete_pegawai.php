<?php 

$konfirmasi = $_GET['id']; /*mengambil data yang di pilih yg akan di hapus*/
$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah = $_mysqli -> query ("delete from pegawai where id_pegawai='".$konfirmasi."' "); /**/

echo $_mysqli->query($perintah); 
	if($perintah == true ){ /*query perintah jika benar maka akan tersimpan*/
	echo "<script>alert('Delete succes');window.location='pegawai.php'</script>";/*data berhasil disimpan */
	}
	else { /*jika salah akan gagal*/
	echo "<script>alert('gagal delete');window.location='pegawai.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
 
?>