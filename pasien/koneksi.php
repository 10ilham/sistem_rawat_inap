<?php
// $koneksi = mysqli_connect("sql105.infinityfree.com","if0_34650787","JejXaVznncvcpD","if0_34650787_rumah_sakit");
$koneksi = mysqli_connect("localhost", "root", "", "rumah_sakit");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
