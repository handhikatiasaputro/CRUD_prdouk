<?php
require "cms1.php";

$get_id= $_GET['id'];

function get_edit_data()
{
    global $db;
    global $get_id;
    $query_get_edit_data = "SELECT * FROM produk WHERE id = '$get_id'";
    $ambil_data_edit = $db->query($query_get_edit_data);
    $data_edit = $ambil_data_edit->fetchArray();
    
    return $data_edit;
}

if(isset($_POST['nama_produk']) && $_POST['nama_produk'] !=''){
    $get_nama_produk=$_POST['nama_produk'];
    $get_harga=$_POST['harga'];
    $get_deskripsi=$_POST['deskripsi'];
    $update_edit_data ="UPDATE produk SET nama_produk='$get_nama_produk', harga='$get_harga', deskripsi='$get_deskripsi' WHERE id='$get_id' ";
    $update_data = $db->query($update_edit_data);

    get_edit_data();
}

if(isset($_POST['nama_produk']))
{
    header('Location: table.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data </title>
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

    input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        resize: vertical; /* Allow vertical resizing for textarea */
    }

    textarea {
        height: 100px; /* Set a fixed height for the textarea */
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
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
    <center>
<div class="container">
        <h1>Edit Data</h1>
        <div class="form-container">
            <form method="POST" action="edit_produk.php?id=<?php echo get_edit_data()['id'];?>">
                <!-- INPUT NAMA -->
                <div class="input-group">
                    <label>Nama</label>
                    <input type="text" name="nama_produk" value="<?php echo get_edit_data()['nama_produk'];?>" required>
                    <label>Harga</label>
                    <input type="text" name="harga" value="<?php echo get_edit_data()['harga'];?>" required>
                    <label>Deskripsi</label>
                   <textarea name="deskripsi" required><?php echo get_edit_data()['deskripsi'];?></textarea>
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="input-group">
                    <input type="submit" name="submit" value="Update">
                    <a href="table.php">Kembali</a>

                </div>
            </form>
        </div>
    </div>
    </center>
</body>
</html>