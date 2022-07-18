<?php include_once('index.html'); ?>

<!DOCTYPE html>

<html>

<head>

    <title>Users</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Users</h2>
        <a href="tambah_users.php" class="btn btn-success btn-xs"> Tambah Users</a>

        <table class="table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Username</th>

                    <th>Nama Lengkap</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($koneksi, "select * from users");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $d['username']; ?></td>

                        <td><?php echo $d['nama_lengkap']; ?></td>

                        <td><a class="btn btn-info" href="edit_users.php?id=<?php echo $d['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_user.php?id=<?php echo $d['id']; ?>">Delete</a></td>

                    </tr>

                <?php
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>