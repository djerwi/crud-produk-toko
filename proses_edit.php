<?php
include("config/db.php");
$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
mysqli_query($conn, "UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok, kategori='$kategori' WHERE id=$id");
header("Location: index.php");
?>