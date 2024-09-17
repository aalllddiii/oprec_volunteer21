<!DOCTYPE html>

<html lang="en">

<?php

include_once "../koneksi.php";

include_once "../sesi.php";



?>



<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Oprec Volunteer BEM FIKTI</title>



  <!-- Custom fonts for this template-->

  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <!-- Custom styles for this template-->

  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/popup.css" />

  <style>
    #content{
      background: linear-gradient(to bottom right, rgb(235,235,255, 0.9), rgb(160,160,255, 0.9)), url('img/kampusd.jpg');
    }

    @media (max-width: 600px){
      .card{
        font-size:13px;
      }

    }
  </style>

</head>



<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



      <!-- Sidebar - Brand -->

      <a class="sidebar-heading d-flex align-items-center justify-content-center" href="index.php">

        <div class="sidebar-brand-icon mx-3 text-center" style="margin:0 10px;">

        <img src="img/bemfikti.png" alt="Logo-BEMFIKTI" style="width: 60px; height: 70px; margin:10px 0;"><br>

        <h6 style="color:white;">OPREC VOLUNTEER BEM FIKTI 2021</h6>
        </div>


      </a>




      <!-- Divider -->

      <hr class="sidebar-divider my-0"><br>



      <!-- Nav Item - Dashboard -->

      <div class="sidebar-heading">

        <!--Menu-->

      </div>

      <li class="nav-item">

        <a class="nav-link" href="index.php">

          <i class="fas fa-address-card"></i>

          <span>Dashboard</span></a>

      </li>

      <li class="nav-item">
        <b>

        <a class="nav-link" href="biodata.php">

          <i class="fas fa-address-book"></i>

          <span>Form Pendaftaran</span></a>

          </b>
      </li>

      <?php if ($tahap1 == 1){ ?>

        <?="
        
      <li class='nav-item active' style='background-color:#0F52BA;'>
      <b>

        <a class='nav-link' href='tglwawancara.php'>

        <i class='fas fa-calendar-alt'></i>

          <span>Form Tanggal Wawancara</span></a>

          </b>
      </li>

      ";} ?>

      <li class="nav-item">
      <b>

        <a class="nav-link" href="kelulusan.php">

        <!-- <a class="nav-link" href="#kelulusan"> -->

          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>Kelulusan</span></a>

      </b>
      </li>



      <!-- Divider -->

      <br>
      <hr class="sidebar-divider">



      <!-- Heading -->



      <!-- Nav Item - Pages Collapse Menu -->



      <!-- Sidebar Toggler (Sidebar) -->

      <div class="text-center d-none d-md-inline">

        <button class="rounded-circle border-0" id="sidebarToggle"></button>

      </div>

    </ul>

    <!-- End of Sidebar -->



    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">



      <!-- Main Content -->

      <div id="content">



        <!-- Topbar -->

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">

            <i class="fa fa-bars"></i>

          </button>



          <!-- Topbar Search -->





          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">



            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

            <li class="nav-item dropdown no-arrow d-sm-none">

              <!-- <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-search fa-fw"></i>

              </a> -->

              <!-- Dropdown - Messages -->

              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">

                <form class="form-inline mr-auto w-100 navbar-search">

                  <div class="input-group">

                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">

                    <div class="input-group-append">

                      <button class="btn btn-primary" type="button">

                        <i class="fas fa-search fa-sm"></i>

                      </button>

                    </div>

                  </div>

                </form>

              </div>

            </li>



            <!-- Nav Item - Alerts -->









            <!-- Nav Item - User Information -->
            <li class="nav-item no-arrow">
              <span class="mr-2 d-none d-md-inline text-gray-600 small">Selamat Datang, <?php echo $nama ?></span>

              <img class="img-profile rounded-circle d-none d-md-inline" style="width:35px; height:35px; margin:15px 0;"
                src="images/<?php echo $upload ?>">
            </li>

            <li class="nav-item dropdown no-arrow">
              <!-- pemisah -->
              <div style="margin:15px 0 15px 10px;" class="topbar-divider d-none d-md-block"></div>

            </li>


            <li class="nav-item no-arrow">
              <a class="nav-link dropdown-toggle setting-tip" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <i class="fas fa-cog"></i>
              </a>

              <!-- Dropdown - User Information -->

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

              
              <?php if($ubah_acara == 0){
                echo "<a class='dropdown-item' href='#setting'><i class='fas fas fa-exchange-alt fa-sm fa-fw mr-2 text-gray-400'></i>Ubah Acara</a>";
              }else{
                echo "<a class='dropdown-item' href='#noubah'><i class='fas fas fa-exchange-alt fa-sm fa-fw mr-2 text-gray-400'></i>Ubah Acara</a>";
              }?>

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

              </div>

            </li>


          </ul>



        </nav>

        <!-- End of Topbar -->



        <!-- Begin Page Content -->

        <div class="container-fluid">



          <!-- Page Heading -->

          <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <h1 class="h3 mb-0 text-gray-800">Form Pengisian Tanggal Wawancara</h1>



          </div>



          <!-- Content Row -->

          <div class="row">





          </div>



          <!-- Content Row -->

          <div class="row">



            <!-- Content Column -->



            <!-- Project Card Example -->



            <!-- Color System -->



            <div class="col-lg">



              <!-- Illustrations -->

              <div class="card shadow mb-4">

                <!-- <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-primary"></h6>

                </div> -->

                <div class="card-body">

                  <div class="text-center">

                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">

                  </div>



                  <div class="container">

                    <div class="row">

                      <div class="col-sm-12">

                        <!-- <h2 class="page-header">Form Pengisian Tanggal Wawancara</h2><br> -->

                        <form method="POST" action="simpan.php?page=tglwawancara.php" enctype="multipart/form-data">

                            <input type="hidden" class="form-control" value="<?php echo $id; ?>" name="id" required>

                            <input type="hidden" class="form-control" value="<?php echo $nama; ?>" name="nama" required>

                            <input type="hidden" class="form-control" minlength="8" maxlength="8" pattern="[^' ']+([0-9])" value="<?php echo $npm; ?>" name="npm" required>

                            <input type="hidden" class="form-control" value="<?php echo $kelas; ?>" name="kelas" required>

                            <input type="hidden" class="form-control" value="<?php echo $jurusan; ?>" name="jurusan" required>

                            <input type="hidden" class="form-control" value="<?php echo $domisili; ?>" name="domisili" required>

                            <textarea hidden class="form-control" cols="40" rows="5" name="alamat" required><?php echo $alamat; ?></textarea>

                            <input type="hidden" class="form-control" value="<?php echo $id_line; ?>" name="id_line" required>

                            <input type="hidden" class="form-control" pattern="([0-9]).{}" value="<?php echo $no_hp; ?>" name="no_hp" required>

                            <textarea hidden class="form-control" cols="40" rows="5" name="gambarDiri" required><?php echo $gambarDiri; ?></textarea>

                            <textarea hidden class="form-control" cols="40" rows="5" name="motoHidup" required><?php echo $motoHidup; ?></textarea>

                            <textarea hidden class="form-control" cols="40" rows="5" name="alasan" required><?php echo $alasan; ?></textarea>

                            <input type="hidden" class="form-control" value="<?php echo $divisi1_1; ?>" name="divisi1_1" required>

                            <input type="hidden" class="form-control" value="<?php echo $divisi1_2; ?>" name="divisi1_2" required>

                            <input type="hidden" class="form-control" value="<?php echo $divisi2_1; ?>" name="divisi2_1" required>

                            <input type="hidden" class="form-control" value="<?php echo $divisi2_2; ?>" name="divisi2_2" required>

                            <input type="hidden" class="form-control" name="upload">

                            <input type="hidden" class="form-control" name="tambahan_file">


                                <label><strong>Wawancara hanya dilaksanakan 1 kali. Silahkan pilih ketersediaan hari untuk wawancara. Tanggal wawancara (2) digunakan untuk penjadwalan ulang wawancara apabila pada tanggal wawancara (1) dianggap telah melebihi batas kuota.</strong></label><br><br>

                                <b>Tanggal wawancara (1): </b>

                                <select class="form-control" name="motivasi">

                                  <?php

                                  $pilih_tgl = array('Selasa, 30 November 2021', 'Rabu, 1 Desember 2021', 'Kamis, 2 Desember 2021', 'Jumat, 3 Desember 2021');

                                  foreach ($pilih_tgl as $tgl_wawancara) {

                                    $selected = $motivasi == $tgl_wawancara ? ' selected="selected"' : '';

                                    echo '<option value="' . $tgl_wawancara . '"' . $selected . '>' . $tgl_wawancara . '</option>';

                                  } ?>

                                </select>

                                <br>

                                <b>Tanggal wawancara (2): </b>

                                <select class="form-control" name="motivasi1">

                                  <?php

                                  $pilih_tgl1 = array('Selasa, 30 November 2021', 'Rabu, 1 Desember 2021', 'Kamis, 2 Desember 2021', 'Jumat, 3 Desember 2021');

                                  foreach ($pilih_tgl1 as $tgl_wawancara1) {

                                    $selected = $motivasi1 == $tgl_wawancara1 ? ' selected="selected"' : '';

                                    echo '<option value="' . $tgl_wawancara1 . '"' . $selected . '>' . $tgl_wawancara1 . '</option>';

                                  } ?>

                                </select>

                                <textarea hidden class="form-control" cols="40" rows="5" name="hpd"><?php echo $hpd; ?></textarea>

                                <br>

                                <br>
                                <?php if($form_tanggal == 0){
                                echo "<button class='btn btn-danger' value='simpan'>Simpan</button>";
                                }else{
                                echo "<h5 style='color: red; text-align:center;'>Maaf, Form pengisian tanggal wawancara telah ditutup!</h5>";
                                }?>

                          </div>

                        </form>

                      </div>

                    </div>

                  </div>


                  <br>
                </div>

              </div>



            </div>

            <!-- /.container-fluid -->


            <br><br>
          </div>

          <!-- End of Main Content -->



          <!-- Footer -->

          <footer class="sticky-footer bg-white">

            <div class="container my-auto">

              <div class="copyright text-center my-auto">

                <span>Copyright &copy; Maintained by Biro PTI</span>

              </div>

            </div>

          </footer>

          <!-- End of Footer -->



        </div>

        <!-- End of Content Wrapper -->



      </div>

      <!-- End of Page Wrapper -->

  <!-- Setting -->
        
  <div id="setting" class="setting overlay" style="width:100%;">
      <div class="cardformulir card o-hidden border-0 shadow-lg my-5">

        <div class="card-body p-0">
          <div class="row">



            <div class="col-lg">

              <a style="position:relative; top:10px; right:20px;" class="close" href="#">&times;</a>

              <div class="p-5">

                <div class="text-center">

                  <h1 class="h4 text-gray-900 mb-4">Ubah Pilihan Acara</h1>

                </div>

                <form class="form-setting" method="POST" action="ubah.php">


                  <label style="margin-bottom:20px;">
                  <i style='color:red;' class='fas fa-exclamation'></i><br>
                  <b>Pilihan Divisi</b> akan terhapus setelah anda mengubah pilihan acara. <br>
                  </label>
                  <div class="form-group row">

                    <div class="col-sm-6 mb-3 mb-sm-0">
                    
                      <label>Acara 1</label><br>

                      <select class="form-control" name="pilihan1">
                        <option value="<?=$pilihan1?>"><?=$pilihan1?></option>
                        <option <?php if($pilihan1=="FIKTI SPACE"){echo "hidden";}?> value="FIKTI SPACE">FIKTI SPACE
                        </option>
                        <option <?php if($pilihan1=="HEROES VIII"){echo "hidden";}?> value="HEROES VIII">HEROES VIII
                        </option>
                        <option <?php if($pilihan1=="FIKTI CAREER"){echo "hidden";}?> value="FIKTI CAREER">FIKTI CAREER
                        </option>
                        <option <?php if($pilihan1=="TECHNOFAIR 9.0"){echo "hidden";}?> value="TECHNOFAIR 9.0">TECHNOFAIR 9.0</option>
                      </select>
                    </div>
                    
                    <div class="col-sm-6">
                    
                      <label>Acara 2</label><br>

                      <select class="form-control" name="pilihan2">
                        <option value="<?=$pilihan2?>"><?=$pilihan2?></option>
                        <option <?php if($pilihan2=="FIKTI SPACE"){echo "hidden";}?> value="FIKTI SPACE">FIKTI SPACE
                        </option>
                        <option <?php if($pilihan2=="HEROES VIII"){echo "hidden";}?> value="HEROES VIII">HEROES VIII
                        </option>
                        <option <?php if($pilihan2=="FIKTI CAREER"){echo "hidden";}?> value="FIKTI CAREER">FIKTI CAREER
                        </option>
                        <option <?php if($pilihan2=="TECHNOFAIR 9.0"){echo "hidden";}?> value="TECHNOFAIR 9.0">TECHNOFAIR 9.0</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="ubah">Ubah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



      <!-- Scroll to Top Button-->

      <a class="scroll-to-top rounded" href="#page-top">

        <i class="fas fa-angle-up"></i>

      </a>



      <!-- Logout Modal-->

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

          <div class="modal-content">

            <div class="modal-header">

              <h5 class="modal-title" id="exampleModalLabel">Logout</h5>

              <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">×</span>

              </button>

            </div>

            <div class="modal-body">Klik Logout Untuk Melanjutkan!</div>

            <div class="modal-footer">

              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

              <a class="btn btn-primary" href="logout.php">Logout</a>

            </div>

          </div>

        </div>

      </div>



      <!-- PopUp -->


      <div id="sukses" class="overlay">

        <div class="popup">

          <h2>Terima Kasih</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Data Berhasil Di Input!

          </div>

        </div>

      </div>



      <div id="erdatabase" class="overlay">

        <div class="popup">

          <h2>Maaf</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Database Error, Harap Hubungi PTI!

          </div>

        </div>

      </div>



      <div id="gagal" class="overlay">

        <div class="popup">

          <h2>Maaf</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Data Gagal Di Input!

          </div>

        </div>

      </div>



      <div id="kelulusan" class="overlay">

      <div class="popup">

        <h2>Oops..</h2>

        <a class="close" href="#">&times;</a>

        <div class="content">

        <p style="font-weight:300;">Informasi kelulusan akan diumumkan pada tanggal 7 Desember 2021.</p>

        </div>

      </div>

    </div>



<div id="noubah" class="overlay">
<div class="popup">
  <h2>Oops..</h2>
  <a class="close" href="#">&times;</a>
  <div class="content">
    Ubah Acara hanya dapat dilakukan sebelum <b>Pengumuman Seleksi Berkas</b>
  </div>
</div>
</div>





      <!-- Bootstrap core JavaScript-->

      <script src="../assets/vendor/jquery/jquery.min.js"></script>

      <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



      <!-- Core plugin JavaScript-->

      <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>



      <!-- Custom scripts for all pages-->

      <script src="../assets/js/sb-admin-2.min.js"></script>



      <!-- Page level plugins -->

      <script src="../assets/vendor/chart.js/Chart.min.js"></script>



      <!-- Page level custom scripts -->

      <script src="../assets/js/demo/chart-area-demo.js"></script>

      <script src="../assets/js/demo/chart-pie-demo.js"></script>



</body>



</html>