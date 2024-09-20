<?php
include "./koneksi.php";
$create = "CREATE TABLE peserta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255),
    umur int,
    jenis_kelamin enum('l','p'),
    telp int,
    alamat varchar(200),
    nomor_bootcamp int,
    nama_bootcamp varchar(200),
    jadwal_kelas enum('pagi','siang')
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

$koneksi->close();
?>