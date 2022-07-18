<?php include_once('index.html'); ?>

<!DOCTYPE html>

<html>

<head>

    <title>Pasien</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Pasien</h2>
        <a href="tambah_pasien.php" class="btn btn-success btn-xs"> Tambah Pasien</a>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Nama Pasien</th>

                    <th>Jenis Kelamin</th>

                    <th>Umur</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "select * from pasien");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['nama_pasien']; ?></td>

                        <td><?php echo $d['jenis_kelamin']; ?></td>

                        <td><?php echo $d['umur']; ?></td>

                        <td><a class="btn btn-info" href="edit_pasien.php?id=<?php echo $d['id_pasien']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_pasien.php?id=<?php echo $d['id_pasien']; ?>">Delete</a></td>

                    </tr>

                <?php
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>