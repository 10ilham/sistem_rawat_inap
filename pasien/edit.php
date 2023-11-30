<?php
include 'sidebar.php';
include 'plugin.php';
include 'header.php';
?>
<link rel="stylesheet" href="tabel.css">

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->
		<br />

		<?php
		include 'koneksi.php';
		$id_pasien = $_GET['id_pasien'];
		$data = mysqli_query($koneksi, "select * from pasien where id_pasien='$id_pasien'");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<div class="body-tabel">
				<div class="tabel-dua">
					<form method="post" action="update.php" enctype="multipart/form-data">
						<table>
							<tr>
								<td colspan="3">
									<h3>EDIT DATA PASIEN</h3>
								</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>
									<input type="hidden" name="id_pasien" value="<?php echo $d['id_pasien']; ?>">
									<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
								</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($d['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>>
										<label class="form-check-label" for="inlineRadio1">Lk</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($d['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>>
										<label class="form-check-label" for="inlineRadio2">Pr</label>
									</div>
								</td>
							</tr>

							<tr>
								<td>Tempat Lahir</td>
								<td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"></td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td>
								<td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td>
							</tr>
							<tr>
								<td>Golongan Darah</td>
								<td>
									<select type="text" name="goldarah">
										<option value="O" <?php if ($d['goldarah'] == 'O') echo 'selected'; ?>>O</option>
										<option value="A" <?php if ($d['goldarah'] == 'A') echo 'selected'; ?>>A</option>
										<option value="B" <?php if ($d['goldarah'] == 'B') echo 'selected'; ?>>B</option>
										<option value="AB" <?php if ($d['goldarah'] == 'AB') echo 'selected'; ?>>AB</option>
									</select>
								</td>
							</tr>

							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
							</tr>
							<tr>
								<td>Gejala</td>
								<td><input type="text" name="penyakit" value="<?php echo $d['penyakit']; ?>"></td>
							</tr>

							<tr>
								<td>Nama Ruangan</td>
								<td>
									<select type="text" name="nama_ruangan">
										<?php
										include 'koneksi.php';
										$data = mysqli_query($koneksi, "select * from ruangan");
										$selected_nama_ruangan = isset($d['nama_ruangan']) ? $d['nama_ruangan'] : ''; // Set the previously submitted data, if available
										while ($d = mysqli_fetch_array($data)) {
											$nama_ruangan = $d['nama_ruangan'];
										?>
											<option value="<?php echo $nama_ruangan; ?>" <?php if ($nama_ruangan == $selected_nama_ruangan) echo 'selected'; ?>><?php echo $nama_ruangan; ?></option>
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
				<?php
			}
				?>
	</main>
</body>