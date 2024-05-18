<?php

//* cek apakah tidak ada data di $_GET
if (!isset($_GET["nim"]) || !isset($_GET["nama"]) 
    || !isset($_GET["jurusan"]) || !isset($_GET["email"]) 
    || !isset($_GET["gambar"])) {


    header("Location: latihan1.php"); //* redirect ke halaman1
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nis"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke halaman1</a>
</body>
</html>