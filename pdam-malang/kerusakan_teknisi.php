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
      <a href="" class="logo"><b>SISTEM APLIKASI PDAM KOTA MALANG</b></a>
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
            
            <div class="row mt">
              <div class="col-md-12">
                <div class="content-panel">
                  <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Tabel Kerusakan PDAM</h4>
                    <hr>
                      
                    <thead>
                      <tr>
                        <th width="100px"><i class="fa fa-bookmark"></i>Id Kerusakan</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Id Pemetaan</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Lokasi</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Alamat</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Kode Pipa</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Status</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Status kerusakan</th>
                        <th width="600px"><i class="fa fa-bookmark"></i>Keterangan</th>
                        <th width="50px"><i class="fa fa-bookmark"></i>Id Pegawai</th>
                        <th width="50px"><i class="fa fa-bookmark"></i>Pegawai</th>
                        <th width="50px"><i class="fa fa-bookmark"></i>Profesi</th>
                        <th width="50px"><i class="fa fa-bookmark"></i>Action</th>
                                               
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
<?php
$_mysqli = new mysqli("localhost","root","","pdam"); /*konek ke database*/
$perintah = $_mysqli->query("select a.id_kerusakan, b.id_pemetaan, b.lokasi, b.alamat, b.kode_pipa, a.status, 
a.status_kerusakan, a.keterangan, c.id_pegawai, c.nama, c.profesi from kerusakan as a inner join pemetaan as b on 
b.id_pemetaan=a.id_pemetaan inner join pegawai as c on c.id_pegawai=a.id_pegawai order by id_kerusakan desc");
$baris = $perintah -> fetch_all();  /*menampilkan semua data pada query*/
for($i=0; $i<count($baris); $i++){
echo "<tr>";
for($j=0; $j<count($baris[$i]); $j++){
echo "<td>";
  echo $baris[$i][$j];
  if($j == (count($baris[$i]))){
  echo "<br/>";
  }
echo "</td>";
}
$b = $baris[$i][0];
echo "<td>
  <a href='update_kerusakan_teknisi.php?id=$b'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a>
</td>";
echo "</tr>";
}
echo "<table>";
?>
            <hr>
            <center><p>*NP : JIKA STATUS  <FONT color="red"><b>RUSAK</b></FONT> , DI MOHON TEKNISI SEGERA MEGUBAH INFROMASI DATA KERUSAKAN</p></center>
                      </tr>     
                              </tbody>
                            </table>
                          </div><!-- /content-panel -->
                       </div><!-- /col-md-12 -->
                  </div><!-- /row -->
                  
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