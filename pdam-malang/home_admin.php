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
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/jquery.js"></script>
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
                  
                  <center><h4><a href="lock_screen.php"><i class="fa fa-lock"></i></a></h4><h4>kunci sebentar</h4></center>

              	  	
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
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Gallery PDAM KOTA MALANG</h3>
            <hr>
        <div class="row mt">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/1.jpg">
                    <img class="img-responsive" src="assets/img/portfolio/1.jpg" width="100%;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/2.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/2.jpg" width="100%;" style="height:212px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/3.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/3.jpg" width="100%;" style="height:212px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
        </div><!-- /row -->

        <div class="row mt">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/9.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/9.jpg" width="100%;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/8.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/8.jpg" width="100%;" style="height:235px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/7.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/7.jpg" width="100%;" style="height:235px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
        </div><!-- /row -->

        <div class="row mt mb">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/5.png">
                                    <img class="img-responsive" src="assets/img/portfolio/5.png" width="100%;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/4.jpeg">
                                    <img class="img-responsive" src="assets/img/portfolio/4.jpeg" width="100%;" style="height:235px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
            <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                  <a class="fancybox" href="assets/img/portfolio/6.jpg">
                                    <img class="img-responsive" src="assets/img/portfolio/6.jpg" width="100%;" style="height:235px;"></a>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
          </div><!-- col-lg-4 -->
        </div><!-- /row -->
        <hr>
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

 <a href="home_admin.php#" class="go-top">
      <i class="fa fa-angle-up"></i>
    </a>


   <footer class="site-footer">
    <div class="text-center">
      <p><font color="black">Copyright &copy; 2016 . All Rights Reserved |</font> <a href="#" target="_blank">Kelompok 4 Proyek</a></p>
    </div>
  </footer>

    <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/fancybox/jquery.fancybox.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>

</body>
 
  <!--footer end-->
</html>
