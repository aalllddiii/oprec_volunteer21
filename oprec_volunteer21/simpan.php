<?php

include_once "koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);

$password = mysqli_real_escape_string($conn, $_POST['password']);

$alamat_email = mysqli_real_escape_string($conn, $_POST['alamat_email']);

$nama = mysqli_real_escape_string($conn, $_POST['nama']);

$pilihan1 = mysqli_real_escape_string($conn, $_POST['pilihan1']);

$pilihan2 = mysqli_real_escape_string($conn, $_POST['pilihan2']);

$upload = 'profile.png';

// $hpd = 'nohpd.png';







$cek = mysqli_query($conn, "select * from user where username='$username'");



$validasi = mysqli_num_rows($cek);



if ($validasi > 0){

    header('Location: register.php#sudah');

}else {

 

 

 // Querry Save

    

    $query = "INSERT INTO user(`username`, `password`, `alamat_email`, `nama`, `tahap1`, `tahap2`, `tahap3`, `npm`, `kelas`, `jurusan`, `domisili`, `alamat`, `id_line`, `no_hp`, `pilihan1`, `divisi1_1`, `divisi1_2`, `pilihan2`, `divisi2_1`, `divisi2_2`, `upload`, `motivasi`,`motivasi1`,`tambahan_file`, `hpd`) VALUES ('$username','$password','$alamat_email','$nama','0','0','0','','','','','','','','$pilihan1','','','$pilihan2','','','$upload','','','$tambahan_file','')";

 

  //kondisi

    

    if (mysqli_query($conn, $query)){

        header('Location: register.php#sukses');

    }else{

        header('Location: register.php#gagal');

    }

}

?>