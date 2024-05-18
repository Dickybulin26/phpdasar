<?php
//* array
//* variable yang mampu menampung banyak nilai

//? cara lama membuat array
$hari = array("senin", "selasa", "rabu"); //? cara lama
$bulan = ["januari", "februari", "maret"]; //? cara baru
$myArray = [123, "tulisan", false]; //? tipe data tiap elemen boleh beda

//! echo $myArray[0],[1]; akan error

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);

//* menampilakan salah satu elemen pada array
echo $hari[0];
echo "<br>";

//* menambahkan elemen pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
print_r($hari);
