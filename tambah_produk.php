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
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .form-container {
        margin-top: 20px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    a {
        display: inline-block;
        margin-top: 10px;
        text-align: center;
        color: #007bff;
        text-decoration: none;
        font-size: 16px;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

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