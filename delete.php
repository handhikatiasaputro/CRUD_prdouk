<?php

require "cms1.php";

$id_get=$_GET['id'];
$hapus_produk="DELETE FROM produk WHERE id='$id_get'";
$hapus = $db->query($hapus_produk);

if($hapus)
{
    header('Location: table.php');
}
else
{
    echo "gagal hapus data";
}
?>