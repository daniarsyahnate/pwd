<?php
require 'functions.php';
//  jika tida ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// ambil id dari URL

$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
var_dump($m['nama']);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="197" height="256"></li>
    <li><?= $m['nama']; ?></li>
    <li><?= $m['nrp']; ?></li>
    <li><?= $m['email']; ?></li>
    <li><?= $m['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Apakah yakin mau di hapus?');"> hapus</a> </li>
    <li><a href="index.php">kembali ke daftar mahasiswa</a></li>

  </ul>
</body>

</html>