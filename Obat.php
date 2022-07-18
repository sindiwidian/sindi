<?php include_once('index.html'); ?>

<!DOCTYPE html>

<html>

<head>

    <title>Obat</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Obat</h2>
        <a href="tambah_obat.php" class="btn btn-success btn-xs"> Tambah Obat</a>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama Obat</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "select * from obat");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['nama_obat']; ?></td>

                        <td><a class="btn btn-info" href="edit_obat.php?id=<?php echo $d['id_obat']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_obat.php?id=<?php echo $d['id_obat']; ?>">Delete</a></td>

                    </tr>

                <?php
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>