<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_obat = $_POST['nama_obat'];

// menginput data ke database
mysqli_query($koneksi, "insert into obat values('','$nama_obat')");

// mengalihkan halaman kembali ke index.php
header("location:Obat.php");
