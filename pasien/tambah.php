<?php
include 'sidebar.php';
include 'plugin.php';
include 'header.php';
?>
<link rel="stylesheet" href="tabel.css">

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->
		<!-- <a href="dashboard.php">KEMBALI</a> -->
		<br />
		<div class="body-tabel">
			<div class="tabel-dua">
				<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
					<table>
						<tr>
							<td colspan="3">
								<h3>TAMBAH DATA PASIEN</h3>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
									<label class="form-check-label" for="inlineRadio1">Lk</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
									<label class="form-check-label" for="inlineRadio2">Pr</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td><input type="text" name="tempat_lahir"></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tanggal_lahir"></td>
						</tr>
						<tr>
							<td>Golongan Darah</td>
							<td>
								<select type="text" name="goldarah">
									<option value="O">O</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="AB">AB</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat"></td>
						</tr>
						<tr>
							<td>Gejala</td>
							<td><input type="text" name="penyakit"></td>
						</tr>

						<tr>
							<td>Nama Ruangan</td>
							<td>
								<select type="text" name="nama_ruangan">
									<?php
									include 'koneksi.php';
									$data = mysqli_query($koneksi, "select * from ruangan");
									while ($d = mysqli_fetch_array($data)) {  // Mengambil setiap baris data hasil query dan menampilkannya dalam bentuk tabel.
									?>
										<option value="<?php echo $d['nama_ruangan']; ?>"><?php echo $d['nama_ruangan']; ?></option>

									<?php
									}
									?>
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