<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, query: "delete from peserta where id='$id'");

header(header: "location:index.php");

?>