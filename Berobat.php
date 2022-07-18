<?php include_once('index.html'); ?>

<!DOCTYPE html>

<html>

<head>

    <title>Berobat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Berobat</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Tanggal</th>

                    <th>Nama Pasien</th>

                    <th>Keluhan</th>

                    <th>Hasil Diagnosa</th>

                    <th>Nama Dokter</th>

                    <th>Penatalaksanaan</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "select * from berobat
                                                INNER JOIN pasien ON berobat.id_pasien = pasien.id_pasien
                                                INNER JOIN dokter ON berobat.id_dokter = dokter.id_dokter");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['tgl_berobat']; ?></td>

                        <td><?php echo $d['nama_pasien']; ?></td>

                        <td><?php echo $d['keluhan_pasien']; ?></td>

                        <td><?php echo $d['hasil_diagnosa']; ?></td>

                        <td><?php echo $d['nama_dokter']; ?></td>

                        <td><?php echo $d['penatalaksanaan']; ?></td>

                        <td><a class="btn btn-danger" href="delete_berobat.php?id=<?php echo $d['id_berobat']; ?>">Delete</a></td>

                    </tr>

                <?php
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>