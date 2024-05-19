<?php

//* koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $db;
    //* ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //* upload gambar
    $gambar = upload();
    if ($gambar == false) {
        return false;
    }

    //* query insert data
    $query = "INSERT INTO mahasiswa VALUES
    ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //* cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    //* cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (in_array($ekstensiGambar, $ekstensiGambarValid) == false) {
        echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>
        ";
        return false;
    }

    //* cek jika ukurannya terlalu besar
    if ($ukuranFile > 3000000) {
        echo "
            <script>
                alert('ukuran gambar terlalu besar!');
            </script>
        ";
        return false;
    }

    //* lolos pengecekan, gambar siap diupload
    //* generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);
}

function ubah($data)
{
    global $db;

    //* ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //* cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    // $gambar = htmlspecialchars($data["gambar"]);

    //* query insert data
    $query = "UPDATE mahasiswa SET
        nama = '$nama',
        nim = '$nim',
        email = '$email',
        jurusan = '$jurusan',
        gambar = '$gambar'
        WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
    WHERE
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    gambar LIKE '%$keyword%'
    ";
    return query($query);
}
