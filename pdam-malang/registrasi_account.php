<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>REGISTRASI ACCOUNT</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
    <center>
    <h3>&nbsp;&nbsp;Form Registrasi</h3>
    <div class="form-panel" style="width:50%;">
      <h4 class="mb"><i class="fa fa-angle-right"></i> Mohon Di isi lengkap </h4>
      
  <form class="form-horizontal style-form" method="post" action="proses_registrasi.php">
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Id Pegawai</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" name="pegawaiid" placeholder="Id Pegawai" value="A" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" name="nama" placeholder="Nama" required>
          </div>
        </div>

         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
             <div class="radio">
             <label><input type="radio" name="jk" value="laki-laki" required> Laki - Laki</label>&nbsp;&nbsp;
             <label><input type="radio" name="jk" value="perempuan" required> Perempuan</label>              
             </div>
          </div>
         </div> 

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat lahir</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" name="tmplahir" placeholder="Tempat Lahir" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="date"  class="form-control" name="tgllahir" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
           <textarea class="form-control" name="alamat" placeholder="alamat" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Telepon</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" name="telepon" placeholder="telepon" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" name="username" placeholder="username" required>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password"  class="form-control" name="password" placeholder="password" required>
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Profesi</label>
          <div class="col-sm-10">
        <select class="form-control" name="profesi" required>
              <option>----Pilih User Login----</option>
              <option>Administrator</option>
              <option>Teknisi</option>
            </select>
             </div>
        </div>
       
        <input type="submit" class="btn btn-success" name="simpan" value="simpan">
        <input type="reset" class="btn btn-danger" value="reset">

    </form>

    </div> <!-- Endd Div Class Form Panel -->
<center>
    
    
  
  <footer class="site-footer">
    <div class="text-center">
      <p><font color="black">Copyright &copy; 2016 . All Rights Reserved |</font> <a href="#" target="_blank">Kelompok 4 Proyek</a></p>
    </div>
  </footer>
  <!--footer end-->

</body>
</html>