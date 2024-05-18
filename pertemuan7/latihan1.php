<?php 

//* variable scope

//* superglobals
//* merupakan variable associative array built in php 

$mahasiswa = [
    [
        "nama" => "Dicky",
        "nis" => "123456789",
        "jurusan" => "RPL",
        "email" => "Dicky@gmail.com",
        "gambar" => "gambar1.png"
    ],
    [
        "nama" => "Ahmad",
        "nis" => "123456789",
        "jurusan" => "TKJ",
        "email" => "Ahmad@gmail.com",
        "gambar" => "gambar2.jpg"
    ],
    [
        "nama" => "Rizal",
        "nis" => "123456789",
        "jurusan" => "DKV",
        "email" => "rizal@gmail.com",
        "gambar" => "gambar3.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nis=<?= $mhs["nis"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
            <?= $mhs["nama"] ?>
        </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>