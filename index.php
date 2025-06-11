<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html><head><title>Data Produk Toko</title><link rel="stylesheet" href="css/style.css"></head>
<body><h1>Data Produk</h1><a href="tambah.php">+ Tambah Produk</a><table>
<tr><th>ID</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Kategori</th><th>Aksi</th></tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM produk");
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nama_produk']}</td>
        <td>Rp " . number_format($row['harga']) . "</td>
        <td>{$row['stok']}</td>
        <td>{$row['kategori']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
        </td>
    </tr>";
}
?>
</table></body></html>