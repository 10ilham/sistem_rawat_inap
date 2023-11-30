<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$goldarah = $_POST['goldarah'];
$alamat = $_POST['alamat'];
$penyakit = $_POST['penyakit'];
$nama_ruangan = $_POST['nama_ruangan'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pasien (nama, jenis_kelamin, tempat_lahir, tanggal_lahir, goldarah, alamat, penyakit, nama_ruangan) VALUES ('$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$goldarah', '$alamat', '$penyakit', '$nama_ruangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>