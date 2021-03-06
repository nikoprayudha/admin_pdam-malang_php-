<!DOCTYPE html>
<?php
include('cekadmin.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>SISTEM APLIKASI PDAM KOTA MALANG</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
  </head>

  <body>
    <section id="container" >  <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>SISTEM APLIKASI PDAM KOTA MALANG</b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="btn btn-default" style="margin-top:20px;" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!-- MENU MENU -->
    <aside>
      <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <p class="centered"><a href="profile.html"><img src="assets/img/ui-zac.jpg" class="img-circle" width="60"></a></p>
          <h5 class="centered"><i> Welcome <i><?php echo $_SESSION['username']; ?><br><br><br>
          Anda Login Sebagai <?php echo $_SESSION['profesi']; ?>
          </h5>
          
          <center><h2><a href="lock_screen.php"><i class="fa fa-lock"></i></a></h2><h4>kunci sebentar</h4></center>
          
          <li class="mt">
            <a class="active" href="home_admin.php">
              <i class="fa fa-dashboard"></i>
              <span>MENU</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>PEGAWAI</span>
            </a>
            <ul class="sub">
              <li><a  href="pegawai.php">Pegawai</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>PEMETAAN</span>
            </a>
            <ul class="sub">
              <li><a  href="pemetaan.php">Pemetaan Debit Air</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>PENGATUR</span>
            </a>
            <ul class="sub">
              <li><a  href="pengatur.php">Pengatur Debit Air</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>KERUSAKAN</span>
            </a>
            <ul class="sub">
              <li><a  href="kerusakan.php">Daftar Kerusakan</a></li>
            </ul>
            <ul class="sub">
              <li><a  href="tambah_kerusakan_admin.php">Tambah Kerusakan</a></li>
            </ul>
          </li>
          </ul> <!-- sidebar menu end-->
          </div> <!--sidebar-menu  end-->
        </aside>
        <!-- END MENU-->
        
        <section id="main-content">
          <section class="wrapper">
    
            <h3>&nbsp;&nbsp;Form Tambah Pegawai</h3>
            <div class="form-panel" style="width:98%;">
        
              <form class="form-horizontal style-form" method="post" action="proses_tambah_pegawai.php">
                        
                    <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Id Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="pegawaiid" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="nama" required>
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
                    <input type="text"  class="form-control" name="tmplahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date"  class="form-control" name="tgllahir"  required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="telepon" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="username" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" name="password" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Profesi</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="profesi" required>
                      <option>---- Pilih Kategori User----</option>
                     <option>Administrator</option>
                      <option>Teknisi</option>
                    </select>
                  </div>
                </div>
                
                <input type="submit" class="btn btn-success" name="simpan" value="simpan" onClick="return confirm('Apakah anda yakin ingin menyimpan?');">
                <input type="reset" class="btn btn-danger" value="reset">
              </form>
              </div> <!-- Endd Div Class Form Panel -->
              
            </section><!-- /wrapper--//>
            </section><!-- /MAIN CONTENT -->
            
            <footer class="site-footer">
              <div class="text-center">
                <p><font color="black">Copyright &copy; 2016 . All Rights Reserved |</font> <a href="#" target="_blank">Kelompok 4 Proyek</a></p>
              </div>
            </footer>

                <script src="assets/js/jquery.js"></script>
                <script src="assets/js/jquery-1.8.3.min.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
                <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
                <script src="assets/js/jquery.scrollTo.min.js"></script>
                <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
                <script src="assets/js/jquery.sparkline.js"></script>
                <!--common script for all pages-->
                <script src="assets/js/common-scripts.js"></script>
                <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
                <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
                <!--script for this page-->
                <script src="assets/js/sparkline-chart.js"></script>
                <script src="assets/js/zabuto_calendar.js"></script>


           <!--footer end-->
          </body>
        </html>