<?php 

$konfirmasi = $_GET['id']; /*mengambil data yang di pilih yg akan di hapus*/
$_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
$perintah = $_mysqli -> query ("delete from pemetaan where id_pemetaan= '".$konfirmasi."' "); /**/

echo $_mysqli->query($perintah); 
	if($perintah == true ){ /*query perintah jika benar maka akan tersimpan*/
	echo "<script>alert('Delete succes');window.location='pemetaan.php'</script>";/*data berhasil disimpan */
	}
	else { /*jika salah akan gagal*/
	echo "<script>alert('gagal delete');window.location='pemetaan.php'</script>";/*data berhasil disimpan */ /*data gagal disimpan*/
	}
 
?>