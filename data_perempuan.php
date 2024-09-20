<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perempuan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            color: white;
            font-weight: 700;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        tr:hover {
            background-color: white;
            cursor: pointer;
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
    </style>
</head>
<body>
    <h1>Data Perempuan</h1>
     
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
        $data_perempuan = mysqli_query($koneksi, "SELECT * FROM peserta WHERE jenis_kelamin = 'p'");
        while($pendataan = mysqli_fetch_array($data_perempuan)){
            ?>
            <tr>
                <td><?php print $pendataan['id'] ?></td>
                <td><?php print $pendataan['nama'] ?></td>
                <td><?php print $pendataan['umur'] ?></td>
                <td><?php print $pendataan['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki-laki'; ?></td>
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
    <div style="text-align: center;">
        <a href="data_laki_laki.php" class="button" style="margin: 10px;">Data Laki-Laki</a>
        <a href="index.php" class="button" style="margin: 10px;">Kembali</a>
    </div>
</body>
</html>
