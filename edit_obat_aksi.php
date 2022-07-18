<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_obat = $_POST['nama_obat'];

// update data ke database
mysqli_query($koneksi, "update obat set nama_obat='$nama_obat' where id_obat='$id'");

// mengalihkan halaman kembali ke Obat.php
header("location:Obat.php");
