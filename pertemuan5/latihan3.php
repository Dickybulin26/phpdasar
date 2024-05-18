<?php
$mahasiswa = [
    ["Dicky", "123456789", "RPL", "Dicky@gmail.com"],
    ["Ahmad", "123456789", "RPL", "Ahmad@gmail.com"],
    ["Rizal", "123456789", "RPL", "rizal@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>nama : <?= $mhs[0]; ?></li>
            <li>NIS : <?= $mhs[1]; ?></li>
            <li>jurusan: <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>