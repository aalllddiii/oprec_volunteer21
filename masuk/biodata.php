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

</head>



<body id="page-top">



  <!-- Page Wrapper -->

  <div id="wrapper">



    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">



      <!-- Sidebar - Brand -->

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

        <div class="sidebar-brand-icon rotate-n-15">

          <!--<i class="fas fa-laugh-wink"></i>-->

        </div>

        <div class="mx-3"><br><small>OPREC VOLUNTEER BEM FIKTI 2021</small></div>

      </a>



      <br>

      <!-- Divider -->

      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->

      <div class="sidebar-heading">

        <!--Menu-->

      </div>

      <li class="nav-item active">

        <a class="nav-link" href="index.php">

          <i class="fas fa-address-card"></i>

          <span>Dashboard</span></a>

      </li>

      <li class="nav-item active">

        <a class="nav-link" href="biodata.php">

          <i class="fas fa-address-book"></i>

          <span>Form Pendaftaran</span></a>

      </li>

      <?php if ($tahap1 == 1){ ?>

      <?="

      <li class='nav-item active'>

      <a class='nav-link' href='tglwawancara.php'>

      <i class='fas fa-calendar-alt'></i>

        <span>Form Tanggal Wawancara</span></a>

      </li>

      ";} ?>

      <li class="nav-item active">

        <a class="nav-link" href="kelulusan.php">

        <!-- <a class="nav-link" href="#kelulusan"> -->

          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>Kelulusan</span></a>

      </li>



      <!-- Divider -->

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

              
                <a class="dropdown-item" href="#setting">
                  <i class="fas fas fa-exchange-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Acara
                </a>


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

            <h1 class="h3 mb-0 text-gray-800"></h1>



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

              <div class="card shadow mb-12">

                <div class="card-header py-3">

                  <h6 class="m-0 font-weight-bold text-primary"></h6>

                </div>

                <div class="card-body">

                  <div class="text-center">

                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">

                  </div>



                  <div class="container">

                    <div class="row">

                      <div class="col-sm-12">

                        <h2 class="page-header">Form Biodata</h2>

                        <form method="POST" action="simpan.php?page=biodata.php" enctype="multipart/form-data">

                          <br>

                          <div class="form-group">

                            <label>Nama Lengkap</label><br>

                            <input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama" required>

                            <br>

                            <label>NPM</label><br>

                            <input type="text" class="form-control" minlength="8" maxlength="8" pattern="[^' ']+([0-9])" value="<?php echo $npm; ?>" name="npm" required>

                            <br>

                            <label>Kelas</label><br>

                            <input type="text" class="form-control" value="<?php echo $kelas; ?>" name="kelas" required>

                            <br>

                            <label>Jurusan</label><br>

                            <select class="form-control" name="jurusan">

                              <?php

                              $jur = array('Sistem Informasi', 'Sistem Komputer');

                              foreach ($jur as $area) {

                                $selected = $jurusan == $area ? ' selected="selected"' : '';

                                echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                              } ?>

                            </select>

                            <br>

                            <label>Lokasi Kampus</label><br>

                            <select class="form-control" name="domisili">

                              <?php

                              $dom = array('Depok', 'Kalimalang', 'Karawaci', 'Cengkareng', 'Salemba', 'Simatupang');

                              foreach ($dom as $area) {

                                $selected = $domisili == $area ? ' selected="selected"' : '';

                                echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                              } ?>

                            </select>

                            <br>

                            <label>Alamat</label><br>

                            <textarea type="text" class="form-control" cols="40" rows="5" name="alamat" required><?php echo $alamat; ?></textarea>

                            <br>

                            <label>ID Line</label><br>

                            <input type="text" class="form-control" value="<?php echo $id_line; ?>" name="id_line" required>

                            <br>

                            <label>No Handphone</label><br>

                            <input type="text" class="form-control" pattern="([0-9]).{}" value="<?php echo $no_hp; ?>" name="no_hp" required>

                            <br>

                            <label>Gambarkan tentang diri anda</label><br>

                            <textarea type="text" class="form-control" cols="40" rows="5" name="gambarDiri" required><?php echo $gambarDiri; ?></textarea>

                            <br>

                            <label>Moto hidup</label><br>

                            <textarea type="text" class="form-control" cols="40" rows="5" name="motoHidup" required><?php echo $motoHidup; ?></textarea>

                            <br>

                            <label>Apa alasan kamu ingin menjadi volunteer pada proker yang kamu pilih?</label><br>

                            <textarea type="text" class="form-control" cols="40" rows="5" name="alasan" required><?php echo $alasan; ?></textarea>

                            <br>

                            <?php

                            if ($pilihan1 == 'HEROES VIII') {

                              $acara = 'HEROES VIII';

                              $options = array('Acara', 'Perlengkapan', 'Sponsorship', 'Media', 'Dana Usaha');

                            } elseif ($pilihan1 == 'FIKTI SPACE') {

                              $acara = 'FIKTI SPACE';

                              $options = array('Acara', 'Perlengkapan', 'Humas', 'Media', 'Dana Usaha', 'Sponsorship', 'Operasional');

                            } elseif ($pilihan1 == 'FIKTI CAREER') {

                              $acara = 'FIKTI CAREER';

                              $options = array('Acara', 'Humas', 'Media', 'Sponsorship', 'Dana Usaha','Operasional');

                            } elseif ($pilihan1 == 'TECHNOFAIR 9.0') {

                              $acara = 'TECHNOFAIR 9.0';

                              $options = array('Acara', 'Media', 'Humas', 'Sponsorship', 'Dana Usaha', 'Perlengkapan');

                            } else {

                              $acara = '';

                              $options = array('Acara', 'Media', 'Perlengkapan', 'Sponsorship', 'Humas', 'Dana Usaha', 'Operasional');

                            }

                            ?>

                            <br>

                            <label>Kamu Terdaftar di Acara <strong> <?= $acara ?> </strong>, Pilih Divisi yang kamu inginkan dibawah :</label>

                            <br>

                            <label>Pilihan 1</label><br>

                            <select class="form-control" name="divisi1_1">

                              <?php

                              foreach ($options as $area) {

                                $selected = $divisi1_1 == $area ? ' selected="selected"' : '';

                                echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                              } ?>

                            </select>

                            <label>Pilihan 2</label><br>

                            <select class="form-control" name="divisi1_2">

                              <?php

                              foreach ($options as $area) {

                                $selected = $divisi1_2 == $area ? ' selected="selected"' : '';

                                echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                              } ?>

                              <select name="" id=""></select>



                              <?php

                              if ($pilihan2 == 'HEROES VIII') {

                                $acara2 = 'HEROES VIII';

                                $options2 = array('Acara', 'Perlengkapan', 'Sponsorship', 'Media', 'Dana Usaha');

                              } elseif ($pilihan2 == 'FIKTI SPACE') {

                                $acara2 = 'FIKTI SPACE';

                                $options2 = array('Acara', 'Perlengkapan', 'Humas', 'Media', 'Dana Usaha', 'Sponsorship', 'Operasional');

                              } elseif ($pilihan2 == 'FIKTI CAREER') {

                                $acara2 = 'FIKTI CAREER';

                                $options2 = array('Acara', 'Humas', 'Media', 'Sponsorship', 'Dana Usaha', 'Operasional');

                              } elseif ($pilihan2 == 'TECHNOFAIR 9.0') {

                                $acara2 = 'TECHNOFAIR 9.0';

                                $options2 = array('Acara', 'Media', 'Humas', 'Sponsorship', 'Dana Usaha', 'Perlengkapan');

                              } else {

                                $acara2 = '';

                                $options2 = array('Acara', 'Media', 'Perlengkapan', 'Sponsorship');

                              }

                              ?>

                              <br>

                              <label>Kamu Terdaftar di Acara <strong> <?= $acara2 ?> </strong>, Pilih Divisi yang kamu inginkan dibawah :</label>

                              <br>

                              <label>Pilihan 1</label><br>

                              <select class="form-control" name="divisi2_1">

                                <?php

                                foreach ($options2 as $area) {

                                  $selected = $divisi2_1 == $area ? ' selected="selected"' : '';

                                  echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                                } ?>

                              </select>

                              <label>Pilihan 2</label><br>

                              <select class="form-control" name="divisi2_2">

                                <?php

                                foreach ($options2 as $area) {

                                  $selected = $divisi2_2 == $area ? ' selected="selected"' : '';

                                  echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';

                                } ?>

                              </select>

                              <br><br>

                              <label>Upload Foto</label><br>
                              
                              <label><b>*Foto Formal(Kemeja bebas dan sopan) ukuran 4 x 6 background merah</b></label>

                              <input type="file" class="form-control" name="upload"><br>

                              <br><label>Upload KRS</label><br>

                              <b><label>Jenis file PDF dan maksimum size 5MB</label><br>

                              <input type="file" class="form-control" name="tambahan_file">

                                <br><br>

                                <label>Jika kamu memilih Divisi <strong>Media</strong>, wajib mencantumkan link gdrive portofolio yang telah diberikan akses</label><br>

                                <textarea type="text" class="form-control" cols="40" rows="5" name="hpd" required><?php echo $hpd; ?></textarea>

                                <!-- <input type="file" class="form-control" name="hpd"> -->

                                <br>

                                <br>

                                <input type="hidden" class="form-control" value="<?php echo $motivasi; ?>" name="motivasi" required>

                                <input type="hidden" class="form-control" value="<?php echo $motivasi1; ?>" name="motivasi1" required>

                                 <button class="btn btn-danger" value="simpan">Simpan</button>

                                <!-- <h3 style="color: red">Maaf pendaftaran telah ditutup!</h3> -->

                          </div>

                        </form>

                      </div>

                    </div>

                  </div>



                  <!-- Approach

                  <div class="card shadow mb-4">

                    <div class="card-header py-3">

                      <h6 class="m-0 font-weight-bold text-primary">Perhatian</h6>

                    </div>

                    <div class="card-body">

                      Isi semua Biodata, Jangan lupa untuk membaca persyaratan, dan selalu berdoa ^^

                    </div>

                  </div> -->



                </div>

              </div>



            </div>

            <!-- /.container-fluid -->



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

      <div id="welcome" class="overlay">

        <div class="popup">

          <h2>Welcome !</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Jangan Lupa Lengkapi Biodata Kamu yaa! ^^

          </div>

        </div>

      </div>



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



      <div id="ukuran" class="overlay">

        <div class="popup">

          <h2>Maaf</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Gagal Input Gambar, Ukuran Maks Gambar 5MB!

          </div>

        </div>

      </div>



      <div id="jenis" class="overlay">

        <div class="popup">

          <h2>Maaf</h2>

          <a class="close" href="#">&times;</a>

          <div class="content">

            Gagal Input Gambar, Jenis yang dibolehkan JPG, JPEG, atau PNG!

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


<div id="ukuran2" class="overlay">
<div class="popup">
  <h2>Maaf</h2>
  <a class="close" href="#">&times;</a>
  <div class="content">
    Gagal Input KRS, Ukuran Maks file 5MB!
  </div>
</div>
</div>



<div id="jenis2" class="overlay">
<div class="popup">
  <h2>Maaf</h2>
  <a class="close" href="#">&times;</a>
  <div class="content">
    Gagal Input KRS, Jenis yang dibolehkan hanya PDF!
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