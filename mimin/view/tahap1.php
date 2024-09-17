<?php



//$sdd = "SELECT tbl_biodata.npm, tbl_biodata.domisili,tbl_akun.nama_lengkap,tbl_berkas.foto,tbl_berkas.rangkuman,tbl_berkas.portofolio,tbl_akun.aktivitas_terakhir,tbl_akun.tahap_sekarang from ((tbl_biodata inner join tbl_berkas on tbl_biodata.npm = tbl_berkas.npm ) inner join tbl_akun on tbl_biodata.npm = tbl_akun.npm)";

$sdd = "Select * from user where tahap1 = 0 and tahap2 = 0";

$hasil = $conn->query($sdd);



if (isset($_GET['oa'])) {



	$sql = "UPDATE `user` SET `tahap1` = ? WHERE `npm` = ?;";



	$stmt = $conn->prepare($sql);



	$stmt->bind_param("ss", $_GET['oa'], $_GET['npm'], $_GET['id']);



	$stmt->execute();



	echo '<script>window.location="https://fikti.bem.gunadarma.ac.id/SDM/volunteer/mimin/tahap1.php?menu=approval";</script>';



	exit();
}



if (isset($_GET['ob'])) {



	$sql = "UPDATE `user` SET `tahap2` = ? WHERE `npm` = ?;";



	$stmt = $conn->prepare($sql);



	$stmt->bind_param("ss", $_GET['ob'], $_GET['npm'], $_GET['id']);



	$stmt->execute();



	echo '<script>window.location="https://fikti.bem.gunadarma.ac.id/SDM/volunteer/mimin/tahap2.php?menu=approval";</script>';



	exit();
}



if (isset($_GET['oc'])) {



	$sql = "UPDATE `user` SET `tahap3` = ? WHERE `npm` = ?;";



	$stmt = $conn->prepare($sql);



	$stmt->bind_param("ss", $_GET['oc'], $_GET['npm'], $_GET['id']);



	$stmt->execute();



	echo '<script>window.location="https://fikti.bem.gunadarma.ac.id/SDM/volunteer/mimin/tahap3.php?menu=approval";</script>';



	exit();
}





?>



<!-- paraf 1-->

<div class="wrapper wrapper-content animated fadeInRight">

	<div class="row">



		<div class="col-lg-12">

			<div class="ibox float-e-margins">

				<div class="ibox-title">

					<h5>Data Volunteer</h5>

					<div class="ibox-tools">

						<a class="collapse-link">

							<i class="fa fa-chevron-up"></i>

						</a>

					</div>

				</div>

				<div class="ibox-content">

					<div class="table-responsive">

						<table class="table table-striped table-bordered table-hover dataTables-example">

							<thead>

								<tr>

									<th>Nama Lengkap</th>

									<th>NPM</th>

									<th>Kelas</th>

									<th>Jurusan</th>

									<th>Lokasi Kampus</th>

									<th>No HP</th>

									<th>Alamat Email</th>

									<th>Id Line</th>

									<th><div style="width: 250px;">Alamat Rumah</div></th>

									<th><div style="width: 250px;">Penggambaran Diri</div></th>

									<th><div style="width: 250px;">Moto Hidup</div></th>

                                    <th><div style="width: 250px;">Alasan</div></th>

									<th>Acara 1</th>

									<th>Divisi 1</th>

									<th>DIvisi 2</th>

									<th>Acara 2</th>

									<th>Divisi 1</th>

									<th>Divisi 2</th>

									<th>Upload Foto</th>

									<th>KRS</th>

									<th><div style="width: 200px;">Link Drive</div></th>

									<th>Kelulusan Tahap Berkas</th>

									<th>Penghapusan</th>





								</tr>

							</thead>

							<tbody>

								<?php while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {

								?>

									<tr>

										<td><?= $row['nama']; ?></td>

										<td><?= $row['npm']; ?></td>

										<td><?= $row['kelas']; ?></td>

										<td><?= $row['jurusan']; ?></td>

										<td><?= $row['domisili']; ?></td>

										<td><?= $row['no_hp']; ?></td>

										<td><?= $row['alamat_email']; ?></td>

										<td><?= $row['id_line']; ?></td>

										<td><?= $row['alamat']; ?></td>

										<td><?= $row['gambarDiri']; ?></td>

										<td><?= $row['motoHidup']; ?></td>

                                        <td><?= $row['alasan']; ?></td>

										<td><strong><?= $row['pilihan1']; ?></strong></td>

										<td><?= $row['divisi1_1']; ?></td>

										<td><?= $row['divisi1_2']; ?></td>

										<td><strong><?= $row['pilihan2']; ?></strong></td>

										<td><?= $row['divisi2_1']; ?></td>

										<td><?= $row['divisi2_2']; ?></td>

										<td><?php echo "<img src='../../oprec_volunteer21/masuk/images/" . $row['upload'] . "' width='60' height='60'>" ?></td>

										<td><a href="../../oprec_volunteer21/masuk/krs/<?=$row['tambahan_file'];?>" download><u>KRS <?= $row['nama']; ?></u></a></td>

										<td><a href="<?= $row['hpd']; ?>"><u><?= $row['hpd']; ?></u></a></td>

										<td>

											<a href="JavaScript:newPopup('lulus1.php?nama=<?= $row['nama']; ?>&npm=<?= $row['npm']; ?>&username=<?= $row['username']; ?>');">LULUSKAN BERKAS</a>

										</td>

										<td>

											<a href="../delete.php?id=<?= $row['id']; ?>&page=min1" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini? Data yang telah dihapus tidak dapat dikembalikan.')">HAPUS</a>

										</td>



									</tr>

								<?php } ?>

							</tbody>

						</table>

					</div>



				</div>

			</div>

		</div>

	</div>

</div>





<!-- Codes POPUP WINDOW-->

<script type="text/javascript">
	// Popup window code

	function newPopup(url) {

		popupWindow = window.open(

			url, 'popUpWindow', 'height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')

	}
</script>



<!-- end paraf 1-->