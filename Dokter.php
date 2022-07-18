<?php include_once('index.html'); ?>

<!DOCTYPE html>

<html>

<head>

    <title>Dokter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Dokter</h2>
        <a href="tambah_dokter.php" class="btn btn-success btn-xs"> Tambah Dokter</a>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama Dokter</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "select * from dokter");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['nama_dokter']; ?></td>

                        <td><a class="btn btn-info" href="edit_dokter.php?id=<?php echo $d['id_dokter']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_dokter.php?id=<?php echo $d['id_dokter']; ?>">Delete</a></td>

                    </tr>

                <?php
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>