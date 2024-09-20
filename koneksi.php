<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pendataan";

$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Gagal terkoneksi: " . $koneksi->connect_error);
}

echo "Berhasil Terhubung Ke Database";

?>
