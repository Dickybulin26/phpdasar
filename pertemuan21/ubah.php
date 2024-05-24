<?php

session_start();
if(isset($_SESSION['login']) == false){
    header("Location: login.php");
    exit;
}

//* koneksi ke database
require 'functions.php';

//* ambil id dari url
$id = $_GET['id'];

//* query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//* cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //* apakah query edit data berhasil
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script> alert('data gagal diubah!') </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>

    <h1>Ubah data mahasiswa</h1>

    <a href="index.php"><button>kembali</button></a>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
            </li>
            <li>
                <label for="nim">nim : </label>
                <input type="number" name="nim" id="nim" required value="<?= $mhs['nim']; ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
            </li>
            <li>
                <label for="gambar">gambar : </label><br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="" width="50">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
    </form>
</body>

</html>