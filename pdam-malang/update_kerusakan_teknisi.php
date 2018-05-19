<!DOCTYPE html>
<?php
include('cekteknisi.php');
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

          
          <li class="mt">
            <a class="active" href="home_teknisi.php">
              <i class="fa fa-dashboard"></i>
              <span>MENU</span>
            </a>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>KERUSAKAN</span>
            </a>
            <ul class="sub">
              <li><a  href="kerusakan_teknisi.php">Daftar Laporan Kerusakan </a></li>
            </ul>
            </li>
          </ul> <!-- sidebar menu end-->
          </div> <!--sidebar-menu  end-->
        </aside>
        <!-- END MENU-->
        
        <section id="main-content">
          <section class="wrapper">
            
             <h3>&nbsp;&nbsp;Form Tambah Kerusakan Admin</h3>
            <div class="form-panel" style="width:98%;">
              <center><p><FONT color="green"><b>*NP : INI ADALAH CONTOH FORM KERUSAKAN </b></FONT></p></center>
              <form class="form-horizontal style-form" method="post" action="proses_update_kerusakan_teknisi.php">
                         <?php
                $konfirmasi = $_GET["id"]; /*ambil data yang di pilih */
                $_mysqli = new mysqli("localhost","root","","pdam"); /*database*/
                $perintah = $_mysqli -> query("select * from kerusakan where id_kerusakan = '".$konfirmasi."' "); /*query update*/
                $baris=$perintah->fetch_all(); /*menampilkan data semuanaya*/
                ?>
                    <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Id Kerusakan</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" name="kerusakanid" value="<?php echo $baris[0][0]; ?>" readonly required>
                  </div>
                </div>
               
                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Id Pemetaan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pemetaanid" required readonly>
                          <option><?php echo $baris[0][1]; ?></option>
                          <option value =""></option>
                                <?php
                                $obj=new mysqli("localhost","root","","pdam");
                                $queryusers = "SELECT * FROM pemetaan ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['id_pemetaan']."</option>";
                                }
                                ?>
                     </select>           
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select name="status" class="form-control">
                      <option><?php echo $baris[0][2]; ?></option>
                      <option>---Pilih Status---</option>
                      <option>Tersedia</option>
                      <option>Rusak</option>
                    </select>
                  </div>
                </div>
             
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Status Kerusakan</label>
                  <div class="col-sm-10">
                    <select name="statuskerusakan" class="form-control" readonly>
                      <option><?php echo $baris[0][3]; ?></option>
                      <option>---Pilih Status Kerusakan---</option>
                      <option>Parah</option>
                      <option>Sedang</option>
                      <option>Biasah</option>
                    </select>
                  </div>
                </div>
             

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="keterangan" required><?php echo $baris[0][4]; ?></textarea>
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Id Pegawai</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="pegawaiid" required>
                      <option><?php echo $baris[0][5]; ?></option>
                          <option value ="">---PILIH ID Pegawai ---</option>
                                <?php
                                $obj=new mysqli("localhost","root","","pdam");
                                $queryusers = "SELECT * FROM pegawai where profesi='Teknisi'  ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['id_pegawai']."</option>";
                                }
                                ?>
                     </select>           
                  </div>
                </div>

                <input type="submit" class="btn btn-success" name="simpan" value="simpan" onClick="return confirm('Apakah anda yakin ingin menyimpan?');">
                <input type="reset" class="btn btn-danger" value="reset">
              </form>
              </div> <!-- Endd Div Class Form Panel -->
                  
                </section><! --/wrapper -->
                </section><!-- /MAIN CONTENT -->
                <!-- js placed at the end of the document so the pages load faster -->
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
              </body>
            </html>