<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_ruangan = $_POST['nama_ruangan'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga_kamar = $_POST['harga_kamar'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO ruangan (nama_ruangan, jenis_kamar, harga_kamar) VALUES ('$nama_ruangan', '$jenis_kamar', '$harga_kamar')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>