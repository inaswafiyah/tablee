<?php
include 'koneksi.php';

$id = $_GET['id']; 

$data = mysqli_query($koneksi, "SELECT * FROM bootcamp WHERE id = $id");
$bootcamp = mysqli_fetch_array($data);

if (!$bootcamp) {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Bootcamp</title>
</head>
<body>
    <h1>Detail Bootcamp</h1>
    <p><strong>Nama Bootcamp:</strong> <?php echo $bootcamp['nama_bootcamp']; ?></p>
    <p><strong>Jadwal Kelas:</strong> <?php echo $bootcamp['jadwal_kelas']; ?></p>
    <p><a href="index.php">Kembali ke Daftar Bootcamp</a></p>
</body>
</html>

<?php
$koneksi->close();
?>
