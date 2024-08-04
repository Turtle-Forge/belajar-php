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

echo "<br>";
var_dump($mhs1);

echo "<br>";
echo "<br>";

// Membuat kelas cetak info
class CetakInfo
{

    // membuat objek type
    public function cetak(Mahasiswa $mhs)
    {
        return "Nama : {$mhs->nama} <br> 
                NIM : {$mhs->nim} <br>
                Prodi : {$mhs->prodi} <br>
                Akt : {$mhs->angkatan} <br>
                IP : {$mhs->ip} <br>";
    }
}

echo "<br>";
echo "<br>";

// menampilkan data mahasiswa
$cetakMhs = new CetakInfo();
echo $cetakMhs->cetak($mhs1);



// membuat kelas MahasiswaBaru yang mewarisi kelas Mahasiswa
class MahasiswaBaru extends Mahasiswa
{
    public $pendaftaran;

    // Konstruktor yang menggabungkan properti dari kelas Mahasiswa dan MahasiswaBaru
    public function __construct($nama, $nim, $prodi, $angkatan, $ip, $pendaftaran)
    {

        // Memanggil konstruktor parent (Mahasiswa)        
        parent::__construct($nama, $nim, $prodi, $angkatan, $ip);
        $this->pendaftaran = $pendaftaran;
    }

    // Menambahkan metode baru khusus untuk MahasiswaBaru
    public function getInfoPendaftaran()
    {
        return "Mahasiswa baru dengan nama {$this->nama} terdaftar pada tanggal {$this->pendaftaran}";
    }
}


// Membuat objek dari kelas Mahasiswabaru
$mhsBaru = new MahasiswaBaru("Joko Susilo", "105222003", "Teknik Sipil", 2023, 3.75, "12 Juli 2023");

// Menampilkan data mahasiswa baru
echo "
        Nama : {$mhsBaru->nama} <br>
        NIM : {$mhsBaru->nim} <br>
        Prodi : {$mhsBaru->prodi} <br>
        Angkatan : {$mhsBaru->angkatan} <br>
        IP : {$mhsBaru->ip} <br>
        Pendaftaran : {$mhsBaru->pendaftaran} <br>
";

echo "<br><br>";
echo $mhsBaru->getInfoPendaftaran();



// menampilkan data mahasiswa
$cetakMhs = new CetakInfo();
echo $cetakMhs->cetak($mhsBaru);
