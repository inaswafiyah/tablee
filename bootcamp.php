<?php
include "./koneksi.php";

$create_bootcamp = "CREATE TABLE IF NOT EXISTS bootcamp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_bootcamp VARCHAR(255) NOT NULL,
    durasi INT, 
    lokasi VARCHAR(255)
)";

if ($koneksi->query($create_bootcamp) === TRUE) {
    echo "Tabel bootcamp berhasil dibuat.<br>";
} else {
    echo "Gagal membuat tabel bootcamp: " . $koneksi->error . "<br>";
}

$koneksi->close();
?>
