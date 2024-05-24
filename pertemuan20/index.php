<?php

require 'functions.php';

session_start();
if (isset($_SESSION['login']) == false) {
    header("Location: login.php");
    exit;
}

$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 109px;
            left: 300px;
            z-index: -1;
            display: none;
        }
    </style>
</head>

<body>

    <a href="logout.php"><button>Logout</button></a>

    <h1>Daftar Mahasiswa</h1>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" id="keyword" autocomplete="off" placeholder="masukkan keyword pencarian...">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img src="loader.gif" class="loader">
    </form>
    <br>

    <a href="tambah.php"><button>Tambah Data Mahasiswa</button></a>
    <br><br>
    <div id="container">


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
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row['id'];
                                                ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');">hapus</a>
                    </td>
                    <td><img src="img/<?= $row['gambar']; ?>" width="50" alt=""></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>

</html>