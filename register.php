
<!DOCTYPE html>



<html lang="en">







<head>







  <meta charset="utf-8">



  <meta http-equiv="X-UA-Compatible" content="IE=edge">



  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <meta name="description" content="">



  <meta name="author" content="">







  <title>Daftar Oprec Volunteer</title>







  <!-- Custom fonts -->



  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">







  <!-- Custom styles -->



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



                <h1 class="h4 text-gray-900 mb-4">Formulir Pendaftaran Oprec Volunteer 2021</h1>



              </div>



              <form method="POST" action="simpan.php">



                <div class="form-group">

                  <input type="text" class="form-control form-control-user" id="username" placeholder="Username" name="username" title="Minimal 6 Karakter dan dimulai dengan huruf." pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,30}$" required><a href="#iu"><i style="float:right; display:inline-block; margin:3px 0 5px;" class="fas fa-info-circle"></i></a>

                </div>



                <div class="form-group">

                  <input type="password" class="form-control form-control-user form-password" id="password" placeholder="Password" name="password" title="Minimal 8 Karakter, Menggunakan Format Huruf Besar, Huruf Kecil dan Angka." pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required><a style="float:right; display:inline-block;" href="#ip"><i class="fas fa-info-circle"></i></a><input style="width:12px; height:12px;" type="checkbox" class="form-checkbox" visible> Show password

                </div>

                <div class="form-group">



                  <input type="email" class="form-control form-control-user" id="alamt_email" placeholder="Alamat Email" name="alamat_email" required>



                </div>



                <div class="form-group ">







                  <input type="text" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap" name="nama" required>











                </div>







                <label><strong>Pilih 1 Acara lagi yang kamu inginkan pada Acara 2 </strong></label>







                <div class="form-group row">



                  <div class="col-sm-6 mb-3 mb-sm-0">



                    <label>Acara 1</label><br>



                    <select class="form-control" name="pilihan1">

                      <option value="FIKTI SPACE">FIKTI SPACE</option>

                      <option value="HEROES VIII">HEROES VIII</option>

                      <option value="FIKTI CAREER">FIKTI CAREER</option>

                      <option value="TECHNOFAIR 9.0">TECHNOFAIR 9.0</option>

                    </select>



                    <?php

                    error_reporting(E_ALL ^ E_NOTICE);

                    // $pilihan1 = $_POST['pilihan1'];

                    ?>



                  </div>



                  <div class="col-sm-6">



                    <label>Acara 2</label><br>





                    <select class="form-control" name="pilihan2">

                      <option value="FIKTI SPACE">FIKTI SPACE</option>

                      <option value="HEROES VIII">HEROES VIII</option>

                      <option value="FIKTI CAREER">FIKTI CAREER</option>

                      <option value="TECHNOFAIR 9.0">TECHNOFAIR 9.0</option>

                    </select>



                    <?php

                    // $pilihan2 = $_POST['pilihan2'];

                    ?>



                  </div>



                </div>







                <button type="submit" class="btn btn-primary btn-user btn-block">



                  Register Account



                </button>



                <hr>



              </form>



              <div class="text-center">



                <a class="small" href="login.php">Sudah Punya Akun? Silahkan Login!</a>



              </div>



            </div>



          </div>



        </div>



      </div>



    </div>



  </div>







  <div id="sukses" class="overlay">



    <div class="popup">



      <h2>Berhasil</h2>



      <a class="close" href="login.php">&times;</a>



      <div class="content">



        Data telah di-input! Silahkan Login ^^



      </div>



    </div>



  </div>



  <div id="sudah" class="overlay">



    <div class="popup">



      <h2>Maaf</h2>



      <a class="close" href="#">&times;</a>



      <div class="content">



        Username telah digunakan, Gunakan Username lain!



      </div>



    </div>



  </div>

  <div id="iu" class="overlay">

    <div class="popup">

      <h2>Info</h2>

      <a class="close" href="#">&times;</a>

      <div class="content">

        Syarat untuk membuat Username adalah Minimal 6 Karakter dan dimulai dengan Huruf.

      </div>

    </div>

  </div>

  <div id="ip" class="overlay">

    <div class="popup">

      <h2>Info</h2>

      <a class="close" href="#">&times;</a>

      <div class="content">

        Syarat untuk membuat Password adalah Minimal 8 Karakter, Menggunakan Huruf Kapital, Huruf Kecil dan

        Angka.

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



<!-- Show Passeord -->

<script type="text/javascript">

  $(document).ready(function() {

    $('.form-checkbox').click(function() {

      if ($(this).is(':checked')) {

        $('.form-password').attr('type', 'text');

      } else {

        $('.form-password').attr('type', 'password');

      }

    });

  });

</script>





</html>