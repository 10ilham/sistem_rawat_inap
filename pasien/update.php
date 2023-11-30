<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$goldarah = $_POST['goldarah'];
$alamat = $_POST['alamat'];
$penyakit = $_POST['penyakit'];
$nama_ruangan = $_POST['nama_ruangan'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE pasien SET nama='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',  goldarah='$goldarah', alamat='$alamat', penyakit='$penyakit', nama_ruangan='$nama_ruangan' where id_pasien='$id_pasien'");
 
// mengalihkan halaman kembali ke dashboard.php
header("location:dashboard.php");
 
?>