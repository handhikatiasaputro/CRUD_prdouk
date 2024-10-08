<?php
require "cms1.php";

if (isset($_POST['nama_produk']) && $_POST['nama_produk'] != '')
{
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $tambah_produk= $db->query("INSERT INTO produk (nama_produk, harga, deskripsi) VALUES ('$nama', '$harga','$deskripsi')");
}
if(isset($_POST['nama_produk'])){
    header('Location: table.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="form-container">
            <form method="POST">
                <!-- INPUT NAMA -->
                <div class="input-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk">
                    <label>Harga</label>
                    <input type="text" name="harga">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi">
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="input-group">
                    <input type="submit" name="submit" value="Tambah">
                    <a href="table.php">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>