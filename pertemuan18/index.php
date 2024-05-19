<?php

require 'functions.php';

session_start();
if (isset($_SESSION['login']) == false) {
    header("Location: login.php");
    exit;
}

//* konfigurasi paggination
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
        .page-active {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>

    <a href="logout.php"><button>Logout</button></a>

    <h1>Daftar Mahasiswa</h1>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="masukkan keyword pencarian...">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <a href="tambah.php"><button>Tambah Data Mahasiswa</button></a>
    <br><br>

    <!-- navigasi -->

    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" class="page-active"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

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

</body>

</html>