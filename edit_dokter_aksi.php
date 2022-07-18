<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_dokter = $_POST['nama_dokter'];

// update data ke database
mysqli_query($koneksi, "update dokter set nama_dokter='$nama_dokter' where id_dokter='$id'");

// mengalihkan halaman kembali ke Dokter.php
header("location:Dokter.php");
