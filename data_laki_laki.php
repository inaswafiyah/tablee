<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laki-Laki</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid white;
        }
        th {
            background-color: pink;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        tr:hover {
            background-color: white;
        }
        .button {
            padding: 8px 12px;
            background-color: pink;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .button:hover {
            background-color: pink;
        }
        .back-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            padding: 10px;
            background-color: pink;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Data Laki-Laki</h1>
    <table>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Nomor Telepon</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
        <?php
        $data_laki_laki = mysqli_query($koneksi, "SELECT * FROM peserta WHERE jenis_kelamin = 'l'");
        while($pendataan = mysqli_fetch_array($data_laki_laki)){
            ?>
            <tr>
                <td><?php print $pendataan['id'] ?></td>
                <td><?php print $pendataan['nama'] ?></td>
                <td><?php print $pendataan['umur'] ?></td>
                <td><?php print $pendataan['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
                <td><?php print $pendataan['telp'] ?></td>
                <td><?php print $pendataan['alamat'] ?></td>
                <td>
                  <a href="formEdit.php?id=<?php print $pendataan['id']?>" class="button">Edit</a>
                  <a href="hapus.php?id=<?php print $pendataan['id'] ?>" class="button" onclick="return confirm('Yakin mau hapus data?')">Hapus</a>
                  <a href="detail.php?id=<?php print $pendataan['id']?>" class="button">Detail</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="index.php" class="back-button">Kembali ke Daftar</a>
</body>
</html>
