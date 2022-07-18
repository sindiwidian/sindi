<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Tambah Pasien</h2>
        <div class="pull-right">
            <a href="Pasien.php" class="btn btn-warning btn-xs">Kembali</a>
        </div>
        <form action="tambah_pasien_aksi.php" method="post">

            <fieldset>

                Nama Pasien:<br>

                <input type="text" name="nama_pasien">

                <br>

                Jenis Kelamin:<br>

                <input type="radio" name="jenis_kelamin" value="P">Perempuan

                <input type="radio" name="jenis_kelamin" value="L">Laki-laki

                <br>
                Umur:<br>

                <input type="text" name="umur">
                <br>

                <input type="submit" value="submit">

            </fieldset>

        </form>
    </div>

</body>

</html>