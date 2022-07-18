<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];

// update data ke database
mysqli_query($koneksi, "update users set username='$username', nama_lengkap='$nama_lengkap' where id ='$id'");

// mengalihkan halaman kembali ke Users.php
header("location:Users.php");
