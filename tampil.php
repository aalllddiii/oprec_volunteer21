<!DOCTYPE html>
<html lang="en">
<?php
require_once('koneksi.php');
$cek = mysqli_query($conn, "select * from user");
$hasil = mysqli_num_rows($cek);

if(isset($_POST['submit'])){
    $acara1 = $_POST['acara1'];
    $cek1 = mysqli_query($conn, "select * from user where pilihan1='$acara1'");
    $hasil1 = mysqli_num_rows($cek1);
    $cek2 = mysqli_query($conn, "select * from user where pilihan2='$acara1'");
    $hasil2 = mysqli_num_rows($cek2);
} else {
$hasil1 = 0;
$hasil2 = 0;
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
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/popup.css" />

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
                <h1 class="h4 text-gray-900 mb-4">Lihat Pendaftar</h1>
            </div>
            <form method="POST" action="#">
                <div class="form-group ">
                <label>ACARA</label><br>
                <select class="form-control" name="acara1">
                <?php 
                $acara = array('HEROES VI', 'Techno Fair 7.0', 'FAF 2.0', 'FOSC 2020');
                foreach ($acara as $area) {
                $selected = $acara1 == $area ? ' selected="selected"' : '';
                echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
                }?>
                </select>
                </div>

                <div class="form-group">
                    HASIL PILIHAN 1
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Hasil" name="hasil" value="<?= $hasil1; ?>">
                </div>
                <div class="form-group">
                    HASIL PILIHAN 2
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Hasil" name="hasil" value="<?= $hasil2; ?>">
                </div>

                <div class="form-group">
                    Total Keseluruhan Pendaftar
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Hasil" name="hasil" value="<?= $hasil; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                CEK
                </button>
                <hr>
            </form>
            
            </div>
        </div>
        </div>
    </div>
    </div>

</div>

            <div id="gagal" class="overlay">
                <div class="popup">
                    <h2>Maaf</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        Username atau Password Salah!
                    </div>
                </div>
            </div>
            <div id="logout" class="overlay">
                <div class="popup">
                    <h2>Sukses</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        Berhasil Logout!
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
