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
            background-color: white;
        }
        h1 {
            text-align: center;
            color: red;
            font-weight: 600;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid white;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid white;
            text-align: center;
        }
        th {
            background-color: pink;
            color: white;
        }
        td {
            background-color: white;
        }
        .center {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            padding: 10px 15px;
            background-color: pink;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>Detail Peserta</h1>

    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Nomor Bootcamp</th>
            <th>Nama Bootcamp</th>
            <th>Jadwal Kelas</th>
        </tr>
        <tr>
            <td><?php echo $pendataan['nama']; ?></td>
            <td><?php echo $pendataan['umur']; ?></td>
            <td><?php echo $pendataan['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
            <td><?php echo $pendataan['telp']; ?></td>
            <td><?php echo $pendataan['alamat']; ?></td>
            <td><?php echo $pendataan['nomor_bootcamp']; ?></td>
            <td><?php echo $pendataan['nama_bootcamp']; ?></td>
            <td><?php echo $pendataan['jadwal_kelas']; ?></td>
        </tr>
    </table>

    <div class="center">
        <a href="index.php" class="button">Kembali</a>
        <a href="kelas_pagi.php?id=<?php echo $id; ?>" class="button">Kelas Pagi</a>
        <a href="kelas_siang.php?id=<?php echo $id; ?>" class="button">Kelas Siang</a>
    </div>
</body>
</html>
