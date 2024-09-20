<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Diri</title>
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
            background-color: darkred;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }
        .action-buttons a {
            padding: 8px 15px;
            background-color: pink;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }
        .action-buttons a:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>Pendataan Diri</h1>

    <table>
        <tr>
            <th colspan="7">
                <div class="action-buttons">
                    <a href="form.php">Tambahkan Data</a>
                    <a href="data_laki_laki.php">Data Laki-Laki</a>
                    <a href="data_perempuan.php">Data Perempuan</a>
                </div>
            </th>
        </tr>
        <tr>
          <th width="5%">No.</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Nomor Telepon</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM peserta");
        while($pendataan = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $pendataan['id']; ?></td>
                <td><?php echo $pendataan['nama']; ?></td>
                <td><?php echo $pendataan['umur']; ?></td>
                <td><?php echo $pendataan['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
                <td><?php echo $pendataan['telp']; ?></td>
                <td><?php echo $pendataan['alamat']; ?></td>
                <td>
                  <a href="formEdit.php?id=<?php echo $pendataan['id']; ?>" class="button">Edit</a>
                  <a href="hapus.php?id=<?php echo $pendataan['id']; ?>" class="button" onclick="return confirm('Yakin mau hapus data?')">Hapus</a>
                  <a href="detail.php?id=<?php echo $pendataan['id']; ?>" class="button">Detail</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
