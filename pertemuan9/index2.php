<?php

//* koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'phpdasar');

//* ambil data dari table mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//* ambil data mahasiswa dari object result (fetching)
//? mysqli_fetch_row() // mengembalikan array numerik
//? mysqli_fetch_object() // mengembalikan object
//? mysqli_fetch_array() // mengembalikan array keduanya
//? mysqli_fetch_assoc() // mengembalikan array associative

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $mhs['gambar']; ?>" width="50" alt=""></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
            </tr>
                <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>

</html>