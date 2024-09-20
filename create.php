<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$nomor_bootcamp = $_POST['nomor_bootcamp'];
$nama_bootcamp = $_POST['nama_bootcamp'];
$jadwal_kelas = $_POST['jadwal_kelas'];

$sql = "INSERT INTO peserta (nama, umur, jenis_kelamin, telp, alamat, nomor_bootcamp, nama_bootcamp, jadwal_kelas) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $koneksi->prepare($sql);
$stmt->bind_param("sissssss", $nama, $umur, $jenis_kelamin, $telp, $alamat, $nomor_bootcamp, $nama_bootcamp, $jadwal_kelas);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
