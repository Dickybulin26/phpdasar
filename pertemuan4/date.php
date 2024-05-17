<?php
//* Date
//? Menampilkan tanggal dengan format tertentu
echo date('l, d-M-Y'), "<br>";

//* Time
//? UNIX Timestamp / EPOCH time
//? detik yang sudah berlalu sejak 1 Januari 1970
echo time(), "<br>";

echo date("l, d M Y", time() + 60 * 60 * 24 * 100), "<br>";

//* mktime
//? membuat detik sendiri
mktime(23, 59, 59, 8, 25, 2021);
//? detik, menit, jam, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 2, 26, 2007)), "<br>";


//* strtotime
echo date('l',strtotime("26 FEB 2007")), "<br>";