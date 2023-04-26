<?php
include "koneksi.php";

$nama_Barang = $_POST['nama_Barang'];
$Gambar = $_POST['Gambar'];
$Unit = $_POST['Unit'];
$Harga = $_POST['Harga'];
$tindak_lanjut = $_POST['tindak_lanjut'];

mysqli_query($koneksi, "INSERT INTO pengaduan_masyarakat (nama_Barang, Gambar, Unit, pengaduan, tindak_lanjut) VALUES ('$nama_Barang', '$Gambar', '$Unit', '$Harga', '$tindak_lanjut')") or die(mysqli_error());

header("location:../View/index.php");

?>