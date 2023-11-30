<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id_dokter yang di kirim dari url
$id_dokter = $_GET['id_dokter'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from dokter where id_dokter='$id_dokter'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>