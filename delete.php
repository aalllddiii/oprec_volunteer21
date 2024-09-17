<?php

include_once("koneksi.php");


$id = $_GET['id'];
$page = $_GET['page'];


if ($page == 'min1'){
    $result = mysqli_query($conn, "DELETE FROM user WHERE id=$id AND tahap1=0 AND tahap2=0");
    header("Location: mimin/tahap1.php");
} elseif ($page == 'min2'){
    $result = mysqli_query($conn, "UPDATE user SET tahap1 = 0 WHERE id=$id");
    header("Location: mimin/tahap2.php");
} else {
    $result = mysqli_query($conn, "UPDATE user SET tahap2 = 0 WHERE id=$id");
    header("Location: mimin/tahaplulus.php");    
}

exit;

