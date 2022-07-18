<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_dokter = $_POST['nama_dokter'];

// menginput data ke database
mysqli_query($koneksi, "insert into dokter values('','$nama_dokter')");

// mengalihkan halaman kembali ke index.php
header("location:Dokter.php");
