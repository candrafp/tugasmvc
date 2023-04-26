<?php
require ("../Controller/koneksi.php");
$data_inventaris = query("SELECT * FROM data_inventaris"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Inventaris</title>
</head>
<body>
    <h1>Aplikasi Data Inventaris</h1>
    <br>
    <a href="../Model/form_tambah.php">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Gambar</th>
            <th>Unit</th>
            <th>Harga</th>
            <th>Tindak Lanjut</th>
            <th>Opsi</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($data_inventaris as $d_i) : ?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$d_i['nama barang'];?></td>
           <td><img src="img/<?=['gambar'];?>" alt="" width="50"></td>
            <td><?=$d_i['unit'];?></td>
            <td><?=$d_i['harga'];?></td>
            <td><?=$d_i['tindak_lanjut'];?></td>
            <td>
                <a href="../Model/form_edit.php?id=<?=$d_i['id'];?>">Edit</a>
                <a href="../Controller/delete.php?id=<?=$d_i['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini')">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>