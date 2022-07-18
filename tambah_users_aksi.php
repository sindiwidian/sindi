<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

// menginput data ke database
mysqli_query($koneksi, "insert into users values('','$username','$password','$nama_lengkap')");

// mengalihkan halaman kembali ke index.php
header("location:Users.php");
