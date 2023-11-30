<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga_kamar = $_POST['harga_kamar'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE ruangan SET nama_ruangan='$nama_ruangan', jenis_kamar='$jenis_kamar', harga_kamar='$harga_kamar' where id_ruangan='$id_ruangan'");
 
// mengalihkan halaman kembali ke dashboard.php
header("location:dashboard.php");
 
?>