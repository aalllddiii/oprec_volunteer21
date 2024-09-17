<!DOCTYPE html>

<html lang="en">

<?php

if ($_GET) {

  $nama = $_GET['nama'];

  $npm = $_GET['npm'];

  $username = $_GET['username'];

} else {

  $nama = '';

  $npm = '';

  $username = '';

}



if (isset($_POST['submit'])) {

  require_once('../koneksi.php');



  $nama = $_POST['nama'];

  $npm = $_POST['npm'];

  $acara = $_POST['acara'];

  $divisi = $_POST['divisi'];

  $username = $_POST['username'];



  $cek = mysqli_query($conn, "select * from user where username='$username' and tahap1=1");



  $validasi = mysqli_num_rows($cek);



  if ($validasi > 0) {

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lulus1.php#sudah">';

    exit();

  } else {

    $simpan = mysqli_query($conn, "UPDATE user SET tahap1 = 1 WHERE username = '$username'");

  }



  if ($simpan) {

    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lulus1.php#berhasil">';

    exit();

  }

}



?>





<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Login</title>



  <!-- Custom fonts for this template-->

  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">



  <!-- Custom styles for this template-->

  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/popup.css" />



</head>



<body class="bg-gradient-primary">



  <div class="container">



    <div class="card o-hidden border-0 shadow-lg my-5">

      <div class="card-body p-0">

        <!-- Nested Row within Card Body -->

        <div class="row">

          <div class="col-lg">

            <div class="p-5">

              <div class="text-center">

                <h1 class="h4 text-gray-900 mb-4">Formulir Kelulusan Berkas</h1>

              </div>

              <form method="POST" action="">

                <input type="hidden" name="username" value="<?= $username; ?>">

                <div class="form-group row">

                  <div class="col-sm-6 mb-3 mb-sm-0">

                    NAMA

                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama"
                      name="nama" value="<?= $nama; ?>" required>

                  </div>

                  <div class="col-sm-6">

                    NPM

                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="NPM"
                      name="npm" value="<?= $npm; ?>" required>

                  </div>

                </div>


                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">

                  Save

                </button>

                <hr>

              </form>

              <div class="text-center">

                <a href="javascript:window.Close()">Kembali</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>



  </div>



  <div id="sudah" class="overlay">

    <div class="popup">

      <h2>Maaf</h2>

      <a class="close" href="#">&times;</a>

      <div class="content">

        Peserta Telah diluluskan !

      </div>

    </div>

  </div>

  <div id="berhasil" class="overlay">

    <div class="popup">

      <h2>Sukses</h2>

      <a class="close" href="#">&times;</a>

      <div class="content">

        Peserta telah diluluskan !

      </div>

    </div>

  </div>



  <!-- Bootstrap core JavaScript-->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->

  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="assets/js/sb-admin-2.min.js"></script>



</body>



</html>