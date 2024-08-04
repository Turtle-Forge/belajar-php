<?php

class Mahasiswa
{
    // ini adalah properti dari kelas Mahasiswa
    public $nama,
        $nim,
        $prodi,
        $angkatan,
        $ip;

    // method 
    function sayHello()
    {

        return "Hello " . $this->nama;
    }
}


$mhs1 = new Mahasiswa();
// var_dump($mhs1);

$mhs1->nama = "Benony Gabriel";
$mhs1->nim = "105222002";
$mhs1->prodi = "Ilmu Komputer";
$mhs1->angkatan = 2022;
$mhs1->ip = 3.59;


echo "Nama : ", $mhs1->nama, "<br>";
echo "NIM : ", $mhs1->nim, "<br>";
echo "Prodi : ", $mhs1->prodi, "<br>";
echo "Angkatan : ", $mhs1->angkatan, "<br>";
echo "IP : ", $mhs1->ip, "<br>";

echo "<br>";

echo $mhs1->sayHello();

echo "<br>";

// $mhs1->tambahProperty = "Properti baru"; // error
