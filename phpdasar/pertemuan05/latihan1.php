<?php
// Belajar Array
// Ada dua cara pembuatan array pada php:

// Cara lama: (Deklarasi Array)
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumad", "Sabtu", "Minggu");

// Cara baru: (Deklarasi Array)
$hari_num = [1, 2, 3, 4, 5, 6, 7];

// Mencetak struktur Array
// Bisa pakai var_dump
echo var_dump($hari);

echo "<br>";

// pakai print_r()
echo print_r($hari);

echo "<br><br>";

// Mencetak isi array
echo "$hari_num[0].$hari[0] <br>";
echo "$hari_num[1].$hari[1] <br>";
echo "$hari_num[2].$hari[2] <br>";
echo "$hari_num[3].$hari[3] <br>";
echo "$hari_num[4].$hari[4] <br>";
echo "$hari_num[5].$hari[5] <br>";
echo "$hari_num[6].$hari[6] <br><br>";

// Mencetak isi array dengan loop foreach:
foreach ($hari as $i) {
    echo $i . "<br>";
}

echo "<br><br>";

foreach ($hari_num as $i) {
    echo $i . "<br>";
}
