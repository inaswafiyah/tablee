<?php
    include './koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
    while ($pendataan = mysqli_fetch_array(result: $data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendataan diri</title>
</head>
<body>
    <h1>Form pendataan diri</h1>
    <form action="./edit.php" method="post">
        <input type="hidden" name="id" value="<?php print $pendataan['id'] ?>">

        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php print $pendataan['nama'] ?>">
        <br><br>

        <label>umur</label>
        <br>
        <input type="text" name="umur" value="<?php print $pendataan['umur'] ?>">
        <br><br>

        <label>jenis kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $pendataan['jenis_kelamin'] ?>">
        <br><br>

        <label>nomor telepon</label>
        <br>
        <input type="number" name="telp" value="<?php print $pendtaaan['telp'] ?>">
        <br><br>

        <label>Alamat</label>
        <br>
        <textarea name="alamat" id="alamat"><?php print $pendataan['alamat']; ?></textarea>
        <br><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
<?php
    }
?>