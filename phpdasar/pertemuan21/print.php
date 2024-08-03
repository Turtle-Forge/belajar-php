<?php

require_once __DIR__ . '/vendor/autoload.php';

require "functions.php";

$books = query("SELECT * FROM book");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Author</th>
                <th>Tahun terbit</th>
                <th>Cover</th>
            </tr>';

$i = 1;
foreach ($books as $row) {
    $html .= '
        <tr>
            <td>' . $i++ . '</td>
            <td>' . $row["title"] . '</td>
            <td>' . $row["author"] . '</td>
            <td>' . $row["tahunTerbitt"] . '</td>
            <td><img src="img/' . $row["gambar"] . '" alt="img"></td>
        </tr>
    ';
}

$html .= '
    </table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
