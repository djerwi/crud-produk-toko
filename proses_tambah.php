<?php
include("config/db.php");
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, stok, kategori) VALUES ('$nama', $harga, $stok, '$kategori')");
header("Location: index.php");
?>