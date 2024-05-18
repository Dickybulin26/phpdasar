<?php

// $mahasiswa = [
//     ["Dicky", "123456789", "RPL", "Dicky@gmail.com"],
//     ["Ahmad", "123456789", "RPL", "Ahmad@gmail.com"],
//     ["Rizal", "123456789", "RPL", "rizal@gmail.com"],
// ];

//* array assosiatif
//? key nya adalah string yang kita definisikan
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
        "jurusan" => "RPL",
        "email" => "Ahmad@gmail.com",
        "gambar" => "gambar2.jpg"
    ],
    [
        "nama" => "Rizal",
        "nis" => "123456789",
        "jurusan" => "RPL",
        "email" => "rizal@gmail.com",
        "gambar" => "gambar3.png"
    ]
];

echo $mahasiswa[1]["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title><style>
        img {
            width: 100px;
        }

        .list-img {
            list-style: none;
        }
    </style>
    
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li class="list-img"><img src="img/<?= $mhs["gambar"]; ?>" alt=""></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nis"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
            <li><?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

