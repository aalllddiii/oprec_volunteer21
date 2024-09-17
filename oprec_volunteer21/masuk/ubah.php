<?php
include_once "../koneksi.php";
include_once "../sesi.php";

$pilihan1 = $_POST['pilihan1'];
$pilihan2 = $_POST['pilihan2'];
$username = $_SESSION['username'];

if(isset($_POST['ubah'])){
mysqli_query($conn,"UPDATE user SET pilihan1='$pilihan1',
                         pilihan2='$pilihan2', 
                         divisi1_1='',
                         divisi1_2='',
                         divisi2_1='',
                         divisi2_2=''
              WHERE username = '$username'");

echo"Affected rows : " . mysqli_affected_rows($conn); 

header("location: index.php#ubahsuccess");
}

?>