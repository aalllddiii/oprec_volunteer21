<?php



//$sdd = "SELECT tbl_biodata.npm, tbl_biodata.domisili,tbl_akun.nama_lengkap,tbl_berkas.foto,tbl_berkas.rangkuman,tbl_berkas.portofolio,tbl_akun.aktivitas_terakhir,tbl_akun.tahap_sekarang from ((tbl_biodata inner join tbl_berkas on tbl_biodata.npm = tbl_berkas.npm ) inner join tbl_akun on tbl_biodata.npm = tbl_akun.npm)";

$sdd = "Select * from user where tahap1 = 1 and tahap2 = 1";

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

                                    <th>Foto</th>
                                
                                    <th>Username</th>
                                
                                    <th>Nama Lengkap</th>

									<th>NPM</th>

									<th>Kelas</th>

                                    <th>Acara</th>

                                    <th>Divisi</th>

									<th>Kembalikan Ke Tahap 2</th>

								</tr>

							</thead>

							<tbody>

								<?php while ($row = $hasil->fetch_array(MYSQLI_ASSOC)) {

								?>

									<tr>

                                        <td><?php echo "<img src='../../oprec_volunteer21/masuk/images/" . $row['upload'] . "' width='50' height='50'>" ?></td>
                                    
                                        <td><?= $row['username']; ?></td>
                                    
                                        <td><?= $row['nama']; ?></td>

										<td><?= $row['npm']; ?></td>

										<td><?= $row['kelas']; ?></td>

                                        <td><strong><?= $row['acaraFix']; ?></strong></td>

                                        <td><strong><?= $row['divisiFix']; ?></strong></td>

										<td>

											<a href="../delete.php?id=<?= $row['id']; ?>&page=min3" onclick="return confirm('Apakah kamu yakin ingin mengembalikan <?= $row['nama']?> ke tahap sebelumnya?')">KEMBALIKAN</a>

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