<!DOCTYPE html>
<html lang="en">

<?php
include '../pasien/sidebar.php';
include '../pasien/plugin.php';
include '../pasien/header.php';
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA RUANGAN</h1>
                    <a class="btn btn-success" href="tambah.php">TAMBAH DATA RUANGAN</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Ruangan</li>
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
                                <h3 class="card-title">Tabel Ruangan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Ruangan</th>
                                            <th scope="col">Jenis Kamar</th>
                                            <th scope="col">Harga Kamar</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT * FROM ruangan");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td style="text-align: ;"><?php echo $no++; ?></td>
                                                <td><?php echo $d['nama_ruangan']; ?></td>
                                                <td><?php echo $d['jenis_kamar']; ?></td>
                                                <td><?php echo $d['harga_kamar']; ?></td>
                                                <td class="project-actions text-left">
                                                    <a href="edit.php?id_ruangan=<?php echo $d['id_ruangan']; ?>" class="btn btn-info btn-sm" onclick="return confirm('Apakah Anda yakin ingin mengedit data ini?')">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        Edit
                                                    </a>
                                                    <a href="hapus.php?id_ruangan=<?php echo $d['id_ruangan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- Akhir Tabel -->
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