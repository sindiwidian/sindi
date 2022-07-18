<?php include_once('index.html'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Users</title>
</head>

<body>
    <br />
    <a href="Users.php">KEMBALI</a>
    <br />
    <br />
    <h3>Edit Users</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from users where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="edit_users_aksi.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="username" value="<?php echo $d['username']; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap']; ?>">
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