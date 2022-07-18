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
    <h3>Edit Dokter</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from dokter where id_dokter='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="edit_dokter_aksi.php">
            <table>
                <tr>
                    <td>Nama Dokter</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_dokter']; ?>">
                        <input type="text" name="nama_dokter" value="<?php echo $d['nama_dokter']; ?>">
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