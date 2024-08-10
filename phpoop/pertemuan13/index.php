<?php

require_once "init.php";

use Pertemuan13\App\Mobil;
use Pertemuan13\App\Motor;

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

echo "<hr><br>";

// new Pertemuan13\App\User();
// echo "<br>";
// new Pertemuan13\Service\User();

// cara lain yaitu membuat alias
use Pertemuan13\App\User as appUser;
use Pertemuan13\Service\User as serviceUser;

new appUser();
echo "<br>";
new serviceUser();
