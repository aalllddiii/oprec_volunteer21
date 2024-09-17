<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Buat Ngatur Font -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Buat Styling -->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/popup.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <style>
      .selekebew{
        width:50%;
        animation-name:munculdariatas;
        animation-timing-function:ease-out;
        animation-duration:2s;
      }
      .cardpenjelasan{
        width:75%;
        margin:0 auto;
      }
      .papan, .papan>h3{
        position: sticky;
        font-size:20px;
        z-index:1;
        top: 0;
        width: fit-content;
        background-color:#0A1931;
        border-radius:0 0 20px 20px;
        margin:0 auto;
      }
      .fa-mouse{
        animation-name:mouse;
        animation-timing-function:linear;
        animation-duration:2s;
        animation-delay: 3s;
        animation-iteration-count: infinite;
      }
      .bg-a{
        padding:50px 0 40px 0;
        margin:0;
        background: linear-gradient(to bottom right, rgb(200,200,255, 0.5), rgb(140,140,255, 0.5)), url('masuk/img/bemfikti.png');
        background-attachment: fixed;
        background-position: top left;
        background-repeat: no-repeat;
        background-size: cover,contain;

      }
      .bg-h, .bg-h>hr{
        margin:0;
        padding:0;
        background-color:#0A1931;
      }
      .bg-b{
        padding:0 0 40px 0;
        margin:0;
        background: linear-gradient(to bottom right, rgb(150,150,120, 0.8), rgb(40,40,100, 0.8)), url('masuk/img/kampusd.jpg');
        background-attachment: fixed;
        background-position: top;
        background-repeat: no-repeat;
        background-size: cover;

      }
    @media (max-width : 990px) {
      .cardpenjelasan{
        width:90%;
        margin:0 auto;
      }
      .papan, .papan>h3{
        font-size:15px;
      }
    }

      @media (max-width : 600px) {
        h1.h5{
          font-size:15px;
        }
        .selekebew{
        width:90%;
        }
        .mouse-hidden{
          font-size:10px;
        }

      }
      @keyframes munculdariatas {
        0%{position: relative; bottom:1000px; opacity:0;}
        90%{position: relative; bottom:-50px;}
        100%{position: relative; bottom:0px; opacity:1;}
      }
      @keyframes mouse {
        0%{position: relative; bottom:20px; opacity: 1;}
        60%{position: relative; bottom:0; opacity: 1;}
        100%{position: relative; bottom:0; opacity:0;}
        
      }



    
  </style>
</head>

<body class="bg-gradient-primary" style="scroll-behavior: smooth;">

  <div class=" bg-a">

    <div class="selekebew card o-hidden border-0 shadow-lg ml-auto mr-auto">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
            <div class="py-4 px-5">
              <div class="text-center">
                <img src="masuk/img/bemfikti.png" alt="Logo-BEMFIKTI" style="width: 80px; height: 90px; margin:10px 0;"><br>
                <h1 title="" class="h5 text-gray-900 mb-4"><strong>OPEN RECRUITMENT VOLUNTEER <br>BEM FIKTI 2021/2022</strong></h1>
              </div>
              <form method="POST" action="cek_login.php">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" name="username"><br>
                  <!-- </div>
                  <div class="col-sm-6"> -->
                    <input type="password" class="form-control form-control-user form-password" id="exampleLastName" placeholder="Password" name="password">
                    <input style="width:12px; height:12px;" type="checkbox" class="form-checkbox"> Show password
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="register.php">Belum Punya Akun? Daftar Dulu Yuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="mouse-hidden text-center" style="color:black; font-size:13px;"><b><i class="fas fa-mouse"></i><br>Scroll Down</b></div><br>
  </div>

  <div class="bg-h"> 

  <hr>

</div>

<div class="bg-b">
<div class="papan">
      <h3 style="color: white; text-align: center; padding:20px 20px 10px; margin: 0;"><strong>Penjelasan Acara BEM FIKTI</strong></h3> 
</div>
      
    <div class="cardpenjelasan card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">FIKTI CAREER</h6>
                </div>
                <div class="card-body">
                  <h6>FIKTI Career (FICAR) merupakan program kerja inovasi BEM FIKTI UG Periode 2021/2022 yang di selenggarakan oleh Biro Hubungan Masyarakat berupa kegiatan webinar, workshop, dan jobfair. FICAR akan membawakan topik utama yang berkaitan dengan dunia pekerjaan bertujuan sebagai tempat untuk para mahasiswa menambah wawasan dan informasi terkait persiapan dunia kerja.  </h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Humas</li>
                  <li>Danus</li>
                  <li>Sponsorship</li>
                  <li>Operasional</li>
                </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cardpenjelasan card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">FIKTI SPACE</h6>
                </div>
                <div class="card-body">
                  <h6>FIKTI SPACE (FIKTI SPORT AND ART CHAMPIONSHIP) merupakan program kerja BEM FIKTI UG Periode 2021/2022 yang berupa festival dan kompetisi di Bidang Olahraga dan Seni Budaya.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</li>
                  <li>Media</li>
                  <li>Perlengkapan</li>
                  <li>Humas</li>
                  <li>Danus</li>
                  <li>Sponsorship</li>
                  <li>Operasional</li>
                </div>
            </div>
          </div>
        </div>
      </div>
    
    <div class="cardpenjelasan card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">TECHNOFAIR 9.0</h6>
                </div>
                <div class="card-body">
                  <h6>TechnoFair 9.0 adalah salah satu program kerja Departemen Akademik BEM FIKTI UG yang dilaksanakan setiap tahun. Menyajikan beberapa rangkaian acara terdiri dari seminar dan workshop diperuntukkan untuk umum serta kompetisi antar universitas yang bertujuan memberikan ilmu mengenai perkembangan teknologi serta sebagai wadah dalam memberikan suatu ide dan gagasan untuk berinovasi.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Humas</li>
                  <li>Danus</li>
                  <li>Perlengkapan</li>
                  <li>Sponsorship</li>
                </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="cardpenjelasan card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">HEROES VIII</h6>
                </div>
                <div class="card-body">
                  <h6>Hero of Education and Social (HEROES) VIII merupakan kegiatan bakti sosial yang dilaksanakan oleh Mahasiswa/i FIKTI UG di wilayah yang memiliki suatu permasalahan dalam keseharian. Selain itu, HEROES VIII juga merupakan bentuk implementasi dari Tri Dharma Perguruan Tinggi yaitu pengajaran dan pengabdian kepada masyarakat karena dalam acara ini terdapat kegiatan seperti melakukan pengajaran tentang teknologi, kerja bakti, dan kegiatan sosial lainnya.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Perlengkapan</li>
                  <li>Sponsorship</li>
                  <li>Danus</li>
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

  <!-- BS Core Js -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core Js-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Js Buat Keseluruhan -->
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