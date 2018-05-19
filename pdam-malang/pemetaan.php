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
  <body onload="peta_klojen()" >
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
                          <span>WILAYAH</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="wilayah.php">Wilayah</a></li>
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
              <li><a  href="kerusakan_admin.php">Daftar Kerusakan</a></li>
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
            
            <div class="row mt">
              <div class="col-md-12">
                <div class="content-panel">
                  <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Tabel Pemetaan Lokasi</h4>
                    <hr>
                     &nbsp;&nbsp;<a href="tambah_pemetaan.php"><button class='btn btn-primary btn-xs'><i class='fa fa-plus'> Tambah Data</i></button></a> 
                    <thead>
                      <tr>
                        <th width="100px"><i class="fa fa-bookmark"></i>Id Pemetaan</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Id Wilayah</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Kode Wilayah</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Lokasi</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Kode Pipa</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Status</th>
                        <th width="100px"><i class="fa fa-bookmark"></i>Alamat Jalur</th>
                        <th width="100px"><i class=" fa fa-edit"></i>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
<?php
$_mysqli = new mysqli("localhost","root","","pdam"); /*konek ke database*/
$perintah = $_mysqli -> query("select a.id_pemetaan, b.id_wilayah, b.kode_wilayah, a.lokasi, a.kode_pipa, a.status, a.alamat from pemetaan as a inner join wilayah as b on b.id_wilayah=a.id_wilayah order by id_pemetaan"); /*melihat tabel 1541180070_nickho*/
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
<a href='update_pemetaan.php?id=$b'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a>
<a href='delete_pemetaan.php?id=$b'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button></a>
      </td>";
echo "</tr>";
}
echo "<table>";
?>
                       
                      </tr>     
                              </tbody>
                            </table>
                          </div><!-- /content-panel -->
                       </div><!-- /col-md-12 -->
                  </div><!-- /row -->

<div class="row mt"> <!-- awal peta  -->
  <div class="col-lg-6">
    <div class="content-panel">
      <h4><i class="fa fa-angle-right"></i>Pemetaan Klojen</h4>
      <div class="panel-body text-center">
        <div id="mapKlojen" style="width:500px;height:400px;background:gray"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="content-panel">
      <h4><i class="fa fa-angle-right"></i>Pemetaan Lowokwaru</h4>
      <div class="panel-body text-center">
        <div id="mapLowokwaru" style="width:500px;height:400px;background:gray"></div>
      </div>
    </div>
  </div>
</div><!-- End awal Peta -->

<div class="row mt"> <!-- awal peta  -->
 <div class="col-lg-6">
    <div class="content-panel">
      <h4><i class="fa fa-angle-right"></i>Pemetaan Blimbing</h4>
      <div class="panel-body text-center">
        <div id="mapBlimbing" style="width:500px;height:400px;background:gray"></div>
      </div>
    </div>
  </div>

 <div class="col-lg-6">
    <div class="content-panel">
      <h4><i class="fa fa-angle-right"></i>Pemetaan Kedungkandang</h4>
      <div class="panel-body text-center">
        <div id="mapKedungkandang" style="width:500px;height:400px;background:gray"></div>
      </div>
    </div>
  </div>
</div><!-- End Awal peta -->  

<div class="row mt"> <!-- awal peta  -->
 <div class="col-lg-6">
    <div class="content-panel">
      <h4><i class="fa fa-angle-right"></i>Pemetaan Sukun</h4>
      <div class="panel-body text-center">
        <div id="mapSukun" style="width:500px;height:400px;background:gray"></div>
      </div>
    </div>
  </div>



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
<!-- PETA PEMETAAN -->
<script>
function klojen() {
  var mapCanvas = document.getElementById("mapKlojen");
  var mapOptions = {
    center: new google.maps.LatLng(-7.965986, 112.617434), zoom:15
  };
  var mapKlojen = new google.maps.Map(mapCanvas, mapOptions);
}

function lowokwaru() {
  var mapCanvas = document.getElementById("mapLowokwaru");
  var mapOptions = {
    center: new google.maps.LatLng(-7.946127, 112.630495), zoom:15
  };
  var mapLowokwaru = new google.maps.Map(mapCanvas, mapOptions);
}

function blimbing() {
  var mapCanvas = document.getElementById("mapBlimbing");
  var mapOptions = {
    center: new google.maps.LatLng(-7.931344, 112.653649), zoom:15
  };
  var mapBlimbing = new google.maps.Map(mapCanvas, mapOptions);
}

function kedungkandang() {
  var mapCanvas = document.getElementById("mapKedungkandang");
  var mapOptions = {
    center: new google.maps.LatLng(-8.000822, 112.645033), zoom:15
  };
  var mapKedungkandang = new google.maps.Map(mapCanvas, mapOptions);
}

function sukun() {
  var mapCanvas = document.getElementById("mapSukun");
  var mapOptions = {
    center: new google.maps.LatLng(-8.006443, 112.619959), zoom:15
  };
  var mapSukun = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=lowokwaru"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=blimbing"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO0tmCWMAYZ975RjUc0VpkdqLrC88Xq1g&callback=kedungkandang"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHISpCjhKzdeLPgKUmVgaqQET3GCOc5Og&callback=sukun"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjJTm4HmOeoSxAPpDGTm5osjgZidqffD4&callback=klojen"></script>

              </body>
            </html>