<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Tambah Users</h2>
        <div class="pull-right">
            <a href="Users.php" class="btn btn-warning btn-xs">Kembali</a>
        </div>
        <form action="tambah_users_aksi.php" method="post">

            <fieldset>

                Username:<br>

                <input type="text" name="username">

                <br>
                Password:<br>

                <input type="text" name="password">

                <br>

                Nama Lengkap:<br>

                <input type="text" name="nama_lengkap">
                <br>

                <input type="submit" value="submit">

            </fieldset>

        </form>
    </div>

</body>

</html>