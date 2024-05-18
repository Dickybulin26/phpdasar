<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php

$angka = [[1, 2, 3],[ 4, 5, 6], [7, 8, 9]];
echo $angka[2][2];

foreach ($angka as $a) {
    foreach ($a as $b) {
        
        echo "<div class='kotak'>$b</div>";
    }
}

?>
<div class="clear"></div>

</body>
</html>