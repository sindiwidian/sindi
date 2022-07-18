<?php include_once('index.html'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Pasien</title>
</head>

<body>
    <br />
    <a href="Pasien.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit Pasien</h3>

    <?php
    include '../koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from pasien where id_pasien='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="edit_pasien_aksi.php">
            <table>
                <tr>
                    <td>Nama Pasien</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_pasien']; ?>">
                        <input type="text" name="nama_pasien" value="<?php echo $d['nama_pasien']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" required <?= $d['jenis_kelamin'] == "Laki-laki" ? "checked" : null ?>> Laki-laki

                        <input type="radio" name="jenis_kelamin" value="P" required <?= $d['jenis_kelamin'] == "Perempuan" ? "checked" : null ?>> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur" value="<?php echo $d['umur']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>