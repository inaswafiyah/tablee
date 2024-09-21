<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta Kelas Pagi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            color: red;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid white;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: pink;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        tr:hover {
            background-color: white;
        }
        .button {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: pink;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .button:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Daftar Peserta Kelas Pagi</h1>

    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php
        $data_pagi = mysqli_query($koneksi, "SELECT * FROM peserta WHERE jadwal_kelas = 'pagi'");
        $no = 1;
        while($row = mysqli_fetch_array($data_pagi)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['umur']; ?></td>
                <td><?php echo $row['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
                <td><?php echo $row['telp']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <a href="detail.php?id=<?php echo $_GET['id']; ?>" class="button">Kembali ke Detail</a>
</body>
</html>
<?php
$koneksi->close();
?>
