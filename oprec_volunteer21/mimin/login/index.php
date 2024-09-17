<?php
session_start();
require_once('../../koneksi.php');

if (isset($_POST['siap'])) {
  //oke sekarang proses dia login
  // define("username", "admin");
  // define("pwd", "Akusangatcintafikti21");

  $username = mysqli_real_escape_string($conn,$_POST['login']);
  $password = mysqli_real_escape_string($conn,($_POST['password']));

  $login = mysqli_query($conn, "SELECT * FROM mimin WHERE user = '$username' AND pass = PASSWORD('$password')");

  $cek = mysqli_num_rows($login);
  $data = mysqli_fetch_assoc($login);

if ($cek > 0){
    $_SESSION['login_admin'] = $data['user'];

    echo "<script>alert('login berhasil, selamat datang $_SESSION[login_admin]');
    location.href='../tahap1.php' </script>"; 
}else{
    echo "<script>alert('login gagal');</script>" ;
}

  // if ($_POST['login'] === username &&  $_POST['password'] === pwd) {
  //   //oke masuk
  //   session_start();
  //   $_SESSION['login_admin'] = true;
  //   header("Location: ../index.php");
  //   exit();
  // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Oprec 2021</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active">Halaman login ADMIN Oprec 2021</h2>


      <!-- Icon -->
      <div class="fadeIn first">
        <img src="https://fikti.bem.gunadarma.ac.id/wp-content/uploads/BEM-FIKTI-logo.png" style="width:120px;height:140px" id="icon" alt="User Icon" />
        <br>
        <a href="https://fikti.bem.gunadarma.ac.id" rel="nofollow" target="_blank"> BEM FIKTI UNIVERSITAS GUNADARMA</a></h2>
      </div>

      <!-- Login Form -->
      <form action="" method="post">
        <div class="m-b-md text-center">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">

          <input type="password" id="password" class="fadeIn third form-password" name="password" placeholder="password">
          <br><input type="checkbox" class="form-checkbox"> Show password
         
        </div>
        <input type="submit" class="fadeIn fourth" name="siap" value="Log In">
      </form>

      <!-- Remind Passowrd -->


      <div class="copyright m-t-sm">
        <div>Maintained By Biro PTI <br>2021/2022 </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="../../assets/vendor/jquery/jquery.min.js"></script>

  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Core plugin JavaScript-->

  <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>



  <!-- Custom scripts for all pages-->

  <script src="../../assets/js/sb-admin-2.min.js"></script>



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