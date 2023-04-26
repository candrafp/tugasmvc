<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris</title>
</head>
<body>
    <h1>Menambahkan data Inventaris</h1>
    <br>
    <a href="../View/index.php" class="back-button">Lihat semua data</a>
    <form action="../Controller/proses_tambah.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_Barang" required></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="image" name="gambar" required></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td><input type="number" name="Unit" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="Harga" required></td>
            </tr>
            <tr>
                <td>Tindak Lanjut</td>
                <td><input type="text" name="tindak_lanjut"required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save data"></td>
            </tr>
        </table>
    </form>
</body>
</html>