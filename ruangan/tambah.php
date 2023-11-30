<?php
include '../pasien/sidebar.php';
include '../pasien/plugin.php';
include '../pasien/header.php';
?>

<link rel="stylesheet" href="../pasien/tabel.css">

<body>

	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->

		<br />
		<!-- <h3>TAMBAH DATA RUANGAN</h3> -->
		<div class="body-tabel">
			<div class="tabel-dua">
				<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td colspan="3">
								<h3>TAMBAH DATA RUANGAN</h3>
							</td>
						</tr>
						<tr>
							<td>Nama Ruangan</td>
							<td><input type="text" name="nama_ruangan"></td>
						</tr>
						<tr>
							<td>Jenis Kamar</td>
							<td><input type="text" name="jenis_kamar"></td>
						</tr>
						<tr>
							<td>Harga Kamar</td>
							<td><input type="text" name="harga_kamar"></td>
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