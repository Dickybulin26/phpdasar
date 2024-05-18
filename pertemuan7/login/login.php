<?php

//* cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //* cek username
    if ($_POST["username"] == "20admin" && $_POST["password"] == "admin20") {
        //* jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //* jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Admin</h1>

<?php if (isset($error)) : ?>
    <p style="color:red;">username / password salah</p>
<?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" ud="username">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="password" name="password" ud="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>