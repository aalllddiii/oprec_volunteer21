<?php
include_once "../koneksi.php";
include_once "../sesi.php";
$username = $_SESSION['username'];
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$npm = mysqli_real_escape_string($conn, $_POST['npm']);
$kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
$domisili = mysqli_real_escape_string($conn, $_POST['domisili']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$id_line = mysqli_real_escape_string($conn, $_POST['id_line']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
// $pilihan1 = $_POST['pilihan1'];
$divisi1_1 = mysqli_real_escape_string($conn, $_POST['divisi1_1']);
$divisi1_2 = mysqli_real_escape_string($conn, $_POST['divisi1_2']);
// $pilihan2 = $_POST['pilihan2'];
$divisi2_1 = mysqli_real_escape_string($conn, $_POST['divisi2_1']);
$divisi2_2 = mysqli_real_escape_string($conn, $_POST['divisi2_2']);
$upload = $_FILES['upload']['name'];
$motivasi = mysqli_real_escape_string($conn, $_POST['motivasi']);
$motivasi1 = mysqli_real_escape_string($conn, $_POST['motivasi1']);
$tambahan_file = $_FILES['tambahan_file']['name'];
$hpd = mysqli_real_escape_string($conn, $_POST['hpd']);
$gambarDiri = mysqli_real_escape_string($conn, $_POST['gambarDiri']);
$motoHidup = mysqli_real_escape_string($conn, $_POST['motoHidup']);
$alasan = mysqli_real_escape_string($conn, $_POST['alasan']);

// pilihan1='$pilihan1',divisi1_1='$divisi1_1',divisi1_2='$divisi1_2',

$laman = $_GET['page'];

mysqli_query($conn, "UPDATE user SET nama='$nama',npm='$npm',kelas='$kelas',jurusan='$jurusan',domisili='$domisili',alamat='$alamat',id_line='$id_line',no_hp='$no_hp',divisi1_1='$divisi1_1',divisi1_2='$divisi1_2',divisi2_1='$divisi2_1',divisi2_2='$divisi2_2',motivasi='$motivasi',motivasi1='$motivasi1',hpd='$hpd',gambarDiri='$gambarDiri',motoHidup='$motoHidup',alasan='$alasan' WHERE username='$username'");

if($upload){
$nama_file = $_FILES['upload']['name'];
$ukuran_file = $_FILES['upload']['size'];
$tipe_file = $_FILES['upload']['type'];
$tmp_file = $_FILES['upload']['tmp_name'];

$nama_acak = round(microtime(true));
$nama_baru = $nama_acak.'.'.$username.'.'.$nama_file;
$path = "images/".$nama_baru;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
    // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $cek = mysqli_query($conn, "UPDATE user SET upload='$nama_baru' WHERE username='$username'");
     // Eksekusi/ Jalankan query dari variabel $query
      
     if($cek){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
      //  header("location: $laman#sukses"); // Redirectke halaman index.php
      //  exit;
     }else{
        // Jika Gagal, Lakukan :
       header("location: $laman#erdatabase");
       exit;
     }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      header("location: $laman#gagal");
      exit;
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    header("location: $laman#ukuran");
    exit;
  }
  }else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  header("location: $laman#jenis");
  exit;
  }
}


if($tambahan_file){
$nama_file = $_FILES['tambahan_file']['name'];
$ukuran_file = $_FILES['tambahan_file']['size'];
$tipe_file = $_FILES['tambahan_file']['type'];
$tmp_file = $_FILES['tambahan_file']['tmp_name'];

$nama_acak = round(microtime(true));
$nama_baru = $nama.'_'.$npm.'_'.$nama_file;
$path = "krs/".$nama_baru;
if($tipe_file == "application/pdf"){ // Cek apakah tipe file yang diupload adalah PDF
  // Jika tipe file yang diupload PDF, lakukan :
  if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
    // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah file berhasil diupload atau tidak
      // Jika file berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $cek = mysqli_query($conn, "UPDATE user SET tambahan_file='$nama_baru' WHERE username='$username'");
     // Eksekusi/ Jalankan query dari variabel $query
      
     if($cek){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
       header("location: $laman#sukses"); // Redirectke halaman index.php
       exit;
     }else{
        // Jika Gagal, Lakukan :
       header("location: $laman#erdatabase");
       exit;
     }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      header("location: $laman#gagal");
      exit;
    }
  }else{
    // Jika ukuran file lebih dari 5MB, lakukan :
    header("location: $laman#ukuran2");
    exit;
  }
  }else{
  // Jika tipe file yang diupload bukan PDF, lakukan :
  header("location: $laman#jenis2");
  exit;
  }
}else{
  header("location: $laman#sukses");
  exit;
}


// if($hpd){
//   $nama_file = $_FILES['hpd']['name'];
//   $ukuran_file = $_FILES['hpd']['size'];
//   $tipe_file = $_FILES['hpd']['type'];
//   $tmp_file = $_FILES['hpd']['tmp_name'];
  
//   $nama_acak = round(microtime(true));
//   $nama_baru = $nama_acak.'.'.$username.'.'.$nama_file;
//   $path = "hpd/".$nama_baru;
//   if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
//     // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
//     if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
//       // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
//       // Proses upload
//       if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
//         // Jika gambar berhasil diupload, Lakukan :  
//         // Proses simpan ke Database
//         $cek = mysqli_query($conn, "UPDATE user SET hpd='$nama_baru' WHERE username='$username'");
//        // Eksekusi/ Jalankan query dari variabel $query
        
//         if($cek){ // Cek jika proses simpan ke database sukses atau tidak
//           // Jika Sukses, Lakukan :
//           header("location: $laman#sukses"); // Redirectke halaman index.php
//           exit;
//         }else{
//           // Jika Gagal, Lakukan :
//           header("location: $laman#erdatabase");
//           exit;
//         }
//       }else{
//         // Jika gambar gagal diupload, Lakukan :
//         header("location: $laman#gagal");
//         exit;
//       }
//     }else{
//       // Jika ukuran file lebih dari 1MB, lakukan :
//       header("location: $laman#ukuran");
//       exit;
//     }
//   }else{
//     // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
//     header("location: $laman#jenis");
//     exit;
//   }
// }else{
//   header("location: $laman#sukses");
//   exit;
// }

?>