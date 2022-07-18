<?php include_once('index.html'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Obat</title>
</head>

<body>
    <br />
    <a href="Obat.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit Obat</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from obat where id_obat='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="edit_obat_aksi.php">
            <table>
                <tr>
                    <td>Nama Obat</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_obat']; ?>">
                        <input type="text" name="nama_obat" value="<?php echo $d['nama_obat']; ?>">
                    </td>
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