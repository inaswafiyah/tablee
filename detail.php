<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM peserta WHERE id = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $pendataan = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

$stmt->close();
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: red;
            font-weight: 600;
        }
        .detail {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid white;
            border-radius: 5px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Detail Peserta</h1>
    <div class="detail">
        <p><strong>Nama:</strong> <?php echo $pendataan['nama']; ?></p>
        <p><strong>Umur:</strong> <?php echo $pendataan['umur']; ?></p>
        <p><strong>Jenis Kelamin:</strong> <?php echo $pendataan['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></p>
        <p><strong>Nomor Telepon:</strong> <?php echo $pendataan['telp']; ?></p>
        <p><strong>Alamat:</strong> <?php echo $pendataan['alamat']; ?></p>
        <p><strong>Nomor Bootcamp:</strong> <?php echo $pendataan['nomor_bootcamp']; ?></p>
        <p><strong>Nama Bootcamp:</strong> <?php echo $pendataan['nama_bootcamp']; ?></p>
        <p><strong>Jadwal Kelas:</strong> <?php echo $pendataan['jadwal_kelas']; ?></p>
    </div>
    <div style="text-align: center;">
        <a href="index.php" class="button">Kembali</a>
    </div>
</body>
</html>
