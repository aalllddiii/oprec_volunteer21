<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
$hasil = mysqli_fetch_array($cek);
if(mysqli_num_rows($cek) == 0) {
	header('Location: login.php#gagal');
	} else {
	if($password <> $hasil['password']) {
		header('Location: login.php#gagal');
	} else {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header('location:masuk/index.php#welcome');
	}
}


?>