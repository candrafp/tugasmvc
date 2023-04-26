<?php 
require "../Controller/koneksi.php";
$data_inventaris = query("SELECT * FROM data_inventaris"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman CRUD</title>
</head>
<body>
    <h1>Mengedit data Inventaris</h1>
    <br>
    <a href="../View/index.php" class="back-button">Lihat semua data</a>
    <form action="../Controller/proses_edit.php" method="post">
        <?php foreach ($data_inventaris as $h) : ?>
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_Barang" value="<?= $h['nama_Barang'];?>" required></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><img src="img/<?=['gambar'];?>" alt="" width="50"></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td><input type="number" name="Unit" value="<?= $h['Unit'];?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="Harga" value="<?= $h['Harga'];?>" required></td>
            </tr>
            <tr>
                <td>Tindak Lanjut</td>
                <td><input type="text" name="tindak_lanjut" value="<?= $h['tindak_lanjut'];?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save data"></td>
            </tr>
        </table>
        <?php endforeach;?>
    </form>
</body>
</html>