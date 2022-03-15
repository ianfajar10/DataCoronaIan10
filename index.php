<?php
	$sumber = "https://data.covid19.go.id/public/api/update.json";
	$konten	= file_get_contents($sumber);
	$isi	= json_decode($konten, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Update Corona Indonesia</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.png" class="mr-2" alt="logo"/></a>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
		<h6 class="font-weight-normal mb-0">Selamat datang, kami menyajikan data Covid-19 di Indonesia</h6>
		<br>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2><h2 class="location font-weight-normal">Indonesia</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-light-orange">
                    <div class="card-body">
                      <center><p class="mb-4">POSITIF</p></center>
						<center><i class="fas fa-head-side-cough" style="font-size:50px; "></i></center>
					  <br>
						<center><?php foreach ($isi['update'] as $key=>$value){
						?>
							<p class="fs-30 mb-2"><?php echo number_format($isi['update']['total']['jumlah_positif'] , 0, ',', '.'); break;?></p>
						<?php
							}
						?></center>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <center><p class="mb-4">DIRAWAT</p></center>
						<center><i class="fa-solid fa-bed-pulse" style="font-size:50px; "></i></center>
					  <br>
						<center><?php foreach ($isi['update'] as $key=>$value){
						?>
							<p class="fs-30 mb-2"><?php echo number_format($isi['update']['total']['jumlah_dirawat'] , 0, ',', '.'); break;?></p>
						<?php
							}
						?></center>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-green">
                    <div class="card-body">
                      <center><p class="mb-4">SEMBUH</p></center>
						<center><i class="fa fa-heartbeat" style="font-size:50px; "></i></center>
					  <br>
						<center><?php foreach ($isi['update'] as $key=>$value){
						?>
							<p class="fs-30 mb-2"><?php echo number_format($isi['update']['total']['jumlah_sembuh'] , 0, ',', '.'); break;?></p>
						<?php
							}
						?></center>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-black">
                    <div class="card-body">
						<center><p class="mb-4">MENINGGAL</p></center>
						<center><i class="fa-solid fa-truck-medical" style="font-size:50px; "></i></center>
					  <br>
						<center><?php foreach ($isi['update'] as $key=>$value){
						?>
							<p class="fs-30 mb-2"><?php echo number_format($isi['update']['total']['jumlah_meninggal'] , 0, ',', '.'); break;?></p>
						<?php
							}
						?></center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
		<!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">By Alfian Fajar Ramadhan.<i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

