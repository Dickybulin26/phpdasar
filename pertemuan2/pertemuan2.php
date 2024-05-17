<?php
//* pertemuan 2 - PHP Dasar
//* Sintaks PHP

//* Standar Output
//? echo, print
//? print_r
//? var_dump

echo "Hello World!";

//* Penulisan sintaks PHP
//? 1. PHP di dalam HTML
//? 2. HTML di dalam PHP

//* variabel dan Tipe Data
//* variabel
//? tidak boleh diawali dengan angka, tapi boleh mengandung angka 
$nama = "Dicky";
$nama_belakang = "Asqaelani";

echo "Hello, nama saya $nama";

//* Operator
//* aritmatika
//? + - * / %
$x = 1;
$y = 2;
echo $x + $y + 1;

//* penggabung string / concatenation
//? .
echo "hello" . " " . $nama . " " . $nama_belakang;


//* Assignment
//? =, +=, -=, *=, /=, %=, .=

$X = 1;
$X -= 5;
echo $X;
$nama = "Dicky";
$nama .= " Asqaelani";
echo $nama;

//* Operator perbandingan
//? <, >, <=, >=, ==, !=
var_dump(1 == 5);
var_dump(1 == '1');

//* indentitas
//? ===, !==
var_dump(1 === "1");

//* logika
//? &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?= $nama; ?></h1>
    <p><?php echo "ini adalah paragraf" ?></p>

    <?php echo "<h1>Hello World!</h1>" ?> 
</body>
</html>

