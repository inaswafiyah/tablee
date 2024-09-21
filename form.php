<form action="./create.php" method="post">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 20px;
        }
        form {
            width: 40%;
            margin: auto;
            padding: 15px;
            border: 2px solid pink;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: pink;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        td {
            padding: 8px;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="int"], input[type="number"], textarea {
            width: 95%; 
            padding: 8px;
            border: 1px solid pink;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 12px;
        }
        button {
            width: 100%;
            padding: 10px; 
            background-color: pink;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 15px;
        }
        button:hover {
            background-color: pink;
        }
    </style>

    <h2>Form Pendaftaran Bootcamp</h2>

    <table>
        <tr>
            <td><label>Nama :</label></td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td><label>Umur :</label></td>
            <td><input type="int" name="umur" required></td>
        </tr>
        <tr>
            <td><label>Jenis Kelamin :</label></td>
            <td><input type="text" name="jenis_kelamin" required></td>
        </tr>
        <tr>
            <td><label>No Telp :</label></td>
            <td><input type="number" name="telp" required></td>
        </tr>
        <tr>
            <td><label>Alamat :</label></td>
            <td><textarea name="alamat" rows="3" required></textarea></td>
        </tr>
        <tr>
            <td><label>Nomor Bootcamp :</label></td>
            <td><input type="int" name="nomor_bootcamp" required></td>
        </tr>
        <tr>
            <td><label>Nama Bootcamp :</label></td>
            <td><input type="text" name="nama_bootcamp" required></td>
        </tr>
        <tr>
            <td><label>Jadwal Kelas :</label></td>
            <td><input type="text" name="jadwal_kelas" required></td>
        </tr>
    </table>

    <button type="submit">Simpan Data</button>
</form>
