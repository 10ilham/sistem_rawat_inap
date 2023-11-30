<?php
include '../pasien/sidebar.php';
include '../pasien/plugin.php';
include '../pasien/header.php';
?>

<link rel="stylesheet" href="../pasien/tabel.css">

<body>
	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Mengatur halaman CRUD DATA agar rapih berada disamping side bar -->
		<br>
		<?php
		include 'koneksi.php';
		$id_ruangan = $_GET['id_ruangan'];
		$data = mysqli_query($koneksi, "select * from ruangan where id_ruangan='$id_ruangan'");
		while ($d = mysqli_fetch_array($data)) {
		?>

			<!-- Css Tabel -->
			<div class="body-tabel">
				<div class="tabel-dua">
					<form method="post" action="update.php" enctype="multipart/form-data">
						<table>
							<tr>
								<td colspan="3">
									<h3>EDIT DATA RUANGAN</h3>
								</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>
									<input type="hidden" name="id_ruangan" value="<?php echo $d['id_ruangan']; ?>">
									<input type="text" name="nama_ruangan" value="<?php echo $d['nama_ruangan']; ?>">
								</td>
							</tr>
							<tr>
								<td>Jenis Kamar</td>
								<td>
									<input type="text" name="jenis_kamar" value="<?php echo $d['jenis_kamar']; ?>">
								</td>
							</tr>
							<tr>
								<td>Harga Kamar</td>
								<td>
									<input type="text" name="harga_kamar" value="<?php echo $d['harga_kamar']; ?>">
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