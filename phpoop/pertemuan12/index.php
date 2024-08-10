<?php
require_once "init.php";

// Penggunaan kelas
$mobil = new Mobil();
$mobil->setMerk('Toyota');
$mobil->setTahun(2020);
$mobil->setJumlahPintu(4);
echo $mobil->getDeskripsi();

echo "<br><br>";

// Implementasi Kelas Motor
$motor = new Motor();
$motor->setMerk('Yamaha');
$motor->setTahun(2018);
$motor->setTipe('Sport');
echo $motor->getDeskripsi(); // Output: Motor: Yamaha, Tahun: 2018, Tipe: Sport
