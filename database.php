<?php
include 'koneksi.php';

$database = 'pendataan';

$create = "CREATE DATABASE $database"; 

if($koneksi->query(query: $create) === true){ 
    echo "database $database berhasil dibuat";
}else{  
    echo "gagal membuat database";
}
$koneksi->close();
?>