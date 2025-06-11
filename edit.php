<?php
include("config/db.php");
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id=$id"));
?><!DOCTYPE html><html><head><title>Edit Produk</title><link rel="stylesheet" href="css/style.css"></head>
<body><h2>Edit Produk</h2>
<form action="proses_edit.php" method="post">
<input type="hidden" name="id" value="<?= $data['id'] ?>">
Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>"><br>
Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br>
Kategori: <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br>
<input type="submit" value="Update">
</form><a href="index.php">Kembali</a></body></html>