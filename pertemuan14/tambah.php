<?php

//* koneksi ke database
require 'functions.php';

//* cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //* apakah query insert data berhasil
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script> alert('data gagal ditambahkan!') </script>";
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

    <h1>tambah data mahasiswa</h1>

    <a href="index.php"><button>kembali</button></a>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">nim : </label>
                <input type="number" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
            </li>
    </form>
</body>

</html>