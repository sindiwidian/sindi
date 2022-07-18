<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];

// update data ke database
mysqli_query($koneksi, "update pasien set nama_pasien='$nama_pasien', jenis_kelamin='$jenis_kelamin', umur='$umur' where id_pasien='$id'");

// mengalihkan halaman kembali ke Pasien.php
header("location:Pasien.php");
