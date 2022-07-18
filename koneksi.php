<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "klinik_312010179"
);

//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi ke database gagal " . mysqli_connect_error();
}
//  else {
//     echo "Koneksi berhasil";
// }
