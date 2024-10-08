<?php

$db = new SQLite3('produk.db');

if(!$db) {
  echo $db->lastErrorMsg();
} else {
  // echo "Open database success...\n";
} 


$db->query('CREATE TABLE IF NOT EXISTS produk(
    id INTEGER PRIMARY KEY,
    nama_produk TEXT NOT NULL,
    harga INTEGER,
    deskripsi TEXT NULL
)');


// $db->query('DROP TABLE produk');