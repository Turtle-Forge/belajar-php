<?php

class Mahasiswa
{
    // ini adalah properti dari kelas Mahasiswa
    public $nama,
        $nim,
        $prodi,
        $angkatan,
        $ip;

    // membuat consturctor
    public function __construct($nama, $nim, $prodi, $angkatan, $ip)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->angkatan = $angkatan;
        $this->ip = $ip;
    }

    // public function __construct()
    // {
    // }

    // method 
    public function sayHello()
    {

        return "Hello " . $this->nama;
    }
}


$mhs1 = new Mahasiswa("Benony Gabriel", "105222002", "Ilmu Komputer", 2022, 3.59);
$mhs2 = new Mahasiswa("Muhammad Fatah", null, "Ekonomi", 2023, null);

// menampilkan mahasiswa
echo "Nama: " . $mhs1->nama . "<br>";
echo "NIM: " . $mhs1->nim . "<br>";
echo "Prodi: " . $mhs1->prodi . "<br>";
echo "Angkatan: " . $mhs1->angkatan . "<br>";
echo "IP: " . $mhs1->ip . "<br>";

var_dump($mhs1);





// $mhs1 = new Mahasiswa();
// var_dump($mhs1);

// $mhs1->nama = "Benony Gabriel";
// $mhs1->nim = "105222002";
// $mhs1->prodi = "Ilmu Komputer";
// $mhs1->angkatan = 2022;
// $mhs1->ip = 3.59;


// echo "Nama : ", $mhs1->nama, "<br>";
// echo "NIM : ", $mhs1->nim, "<br>";
// echo "Prodi : ", $mhs1->prodi, "<br>";
// echo "Angkatan : ", $mhs1->angkatan, "<br>";
// echo "IP : ", $mhs1->ip, "<br>";
