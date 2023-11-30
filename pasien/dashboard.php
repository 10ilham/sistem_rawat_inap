<!DOCTYPE html>
<html lang="en">
<?php
include 'sidebar.php';
include 'plugin.php';
include 'header.php';
?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DATA PASIEN</h1> <br>
          <a class="btn btn-success" href="tambah.php">TAMBAH DATA PASIEN</a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pasien</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- Awal Tabel -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Tabel Pasien</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Golongan Darah</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Gejala</th>
                      <th scope="col">Nama Ruangan</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM pasien");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td style="text-align: left;"><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['tempat_lahir']; ?></td>
                        <td><?php echo DateTime::createFromFormat('Y-m-d', $d['tanggal_lahir'])->format('d-m-Y'); ?></td>
                        <td><?php echo $d['goldarah']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['penyakit']; ?></td>
                        <td><?php echo $d['nama_ruangan']; ?></td>
                        <td class="project-actions text-left">
                          <a href="edit.php?id_pasien=<?php echo $d['id_pasien']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                          </a>
                          <a href="hapus.php?id_pasien=<?php echo $d['id_pasien']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i>
                            Delete
                          </a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- Akhir Tabel-->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
  </div>
  <strong>Copyright &copy; 2023</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>

</html>