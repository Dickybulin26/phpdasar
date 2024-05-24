<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();
$html = '
<style src="css/print.css"></style>
<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>';
foreach ($mahasiswa as $row) {
    $html .= '<tr>
        <td>' . $i++ . '</td>
        <td><img src="img/' . $row["gambar"] . '" width="50"></td>
        <td>' . $row["nrp"] . '</td>
        <td>' . $row["nama"] . '</td>
        <td>' . $row["email"] . '</td>
        <td>' . $row["jurusan"] . '</td>';
};

$html .= '</table>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');
