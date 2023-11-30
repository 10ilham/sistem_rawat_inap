<?php
include '../pasien/sidebar.php';
include '../pasien/plugin.php';
include '../pasien/header.php';
?>
<!-- Ngelink ke tabel.css -->
<link rel="stylesheet" href="../pasien/tabel.css">

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

		<br />
		<!-- <h3>TAMBAH DATA DOKTER</h3> -->
		<div class="body-tabel">
			<div class="tabel-dua">
				<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td colspan="3">
								<h3>TAMBAH DATA DOKTER</h3>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>

						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat"></td>
						</tr>

						<tr>
							<td>No. Telepon</td>
							<td><input type="number" name="no_telp"></td>
						</tr>

						<tr>
							<td>Spesialis</td>
							<td>
								<select type="text" name="spesialis">
									<option value="Jantung">Jantung</option>
									<option value="Syaraf">Syaraf</option>
									<option value="Umum">Umum</option>
									<option value="Bedah">Bedah</option>
									<option value="Anak">Anak</option>
								</select>
							</td>
						</tr>

						<tr>
							<td colspan="3"><input class="btn btn-success" type="submit" value="SIMPAN"></td>
						</tr>
						<tr>
							<td colspan="3"><a class="btn btn-secondary" href="dashboard.php">BATAL</a></td>
						</tr>
					</table>
				</form>
</body>
</html>