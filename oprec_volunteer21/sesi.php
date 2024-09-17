<?php
if(session_id() == '') {
    session_start();
}

if (isset($_SESSION['username']) === true) {
	//jika username udah ada maka langsung alihkan ke home
	//tanpa login
	//header("Location: index.php");
	//exit();
} else {
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../login.php">';

	//header("Location: /SDM/volunteer/login.php");
	exit;
} 

if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout')
{
	session_destroy();
	header("Location: /SDM/volunteer/login.php");
	exit();
}

$data = mysqli_query($conn, "SELECT * FROM user WHERE username='{$_SESSION['username']}'");

while ($d = mysqli_fetch_array($data)) {
    $id = $d['id'];
    $username = $d['username'];
    $password = $d['password'];
    $alamat_email = $d['alamat_email'];
    $nama = $d['nama'];
    $tahap1 = $d['tahap1'];
    $tahap2 = $d['tahap2'];
    $tahap3 = $d['tahap3'];
    $npm = $d['npm'];
    $kelas = $d['kelas'];
    $jurusan = $d['jurusan'];
    $domisili = $d['domisili'];
    $alamat = $d['alamat'];
    $id_line = $d['id_line'];
    $no_hp = $d['no_hp'];
    $gambarDiri = $d['gambarDiri'];
    $motoHidup = $d['motoHidup'];
    $alasan = $d['alasan'];
    $pilihan1 = $d['pilihan1'];
    $divisi1_1 = $d['divisi1_1'];
    $divisi1_2 = $d['divisi1_2'];
    $pilihan2 = $d['pilihan2'];
    $divisi2_1 = $d['divisi2_1'];
    $divisi2_2 = $d['divisi2_2'];
    $upload= $d['upload'];
    $motivasi = $d['motivasi'];
    $motivasi1 = $d['motivasi1'];
    $hpd = $d['hpd'];
    $tambahan_file = $d['tambahan_file'];

}

$setting = mysqli_query($conn, "SELECT * FROM settings WHERE id = 'admine'");

while ($row = mysqli_fetch_array($setting)) {
    $register = $row['register'];
    $ubah_acara = $row['ubah_acara'];
    $form_biodata = $row['form_biodata'];
    $form_tanggal = $row['form_tanggal'];
    $pengumuman1 = $row['pengumuman1'];
    $pengumuman2 = $row['pengumuman2'];
}

?>