<?php
//* Pengulangan
//? for
//? while
//? do.. while
//? foreach : pengulangan khusus array

echo "dengan for <br>";
for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br>";
}


echo "<hr> <br> dengan while <br>";
$i = 0;
while ($i <= 5) {
    echo "Hello World! <br>";
    $i++;
}


echo "<hr> <br> dengan do.. while <br>";
$i = 0;
do {
    echo "Hello World! <br>";
    $i++;
} while ($i <= 5);