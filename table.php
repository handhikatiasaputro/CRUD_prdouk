<?php
require "cms1.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk aja</title>
    <style>
        .table{
            width:50%;
            margin-left:25%;
            margin-bottom: 20px;
            text-align: center;
            
        }
        .table th{
            background-color:#03a1fc;
        }
        .tambah {
           background-color: blue;
           padding: 5px 30px;
           color: white;
           text-decoration: none;
           margin-top: 40px; 
           margin-left: 25%;
           border-radius: 4px;
        }
    </style>
</head>
<body>
    <table border=1 class="table">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
           $query_ambil_data = "SELECT * FROM produk";
           $ambil_data = $db->query($query_ambil_data);
           $no = 1;
           while($row = $ambil_data->fetchArray()):
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nama_produk'];?></td>
            <td><?php echo $row['harga'];?></td>
            <td><?php echo $row['deskripsi'];?></td>
            <td><a href="edit_produk.php?id=<?php echo $row['id'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Kamu Yakin Mau Hapus Produk Ini?')">Hapus</a></td>
        </tr>
        <?php 
            $no++;
           endwhile; 
        ?>
    </table>
    <a href="tambah_produk.php" class="tambah">Tambah</a>
</body>
</html>
