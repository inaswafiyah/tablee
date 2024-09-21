<?php
include './koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
while ($pendataan = mysqli_fetch_array($data)) {
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
            background-color: white;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: red;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid white;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: pink;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.2s, transform 0.1s;
            cursor: pointer;
        }
        button:active {
            transform: scale(0.95);
            background-color: pink;
        }
        button:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Form Pendataan Diri</h1>
    <form action="./edit.php" method="post">
        <input type="hidden" name="id" value="<?php print $pendataan['id'] ?>">

        <label>Nama</label>
        <input type="text" name="nama" value="<?php print $pendataan['nama'] ?>">

        <label>Umur</label>
        <input type="text" name="umur" value="<?php print $pendataan['umur'] ?>">

        <label>Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" value="<?php print $pendataan['jenis_kelamin'] ?>">

        <label>Nomor Telepon</label>
        <input type="number" name="telp" value="<?php print $pendataan['telp'] ?>">

        <label>Alamat</label>
        <textarea name="alamat" id="alamat"><?php print $pendataan['alamat']; ?></textarea>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
<?php
}
?>
