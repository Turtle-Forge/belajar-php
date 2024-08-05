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
        return "Hello " . $this->nama . "<br><br>";
    }

    public function cetakInfo()
    {
        return "Nama : {$this->nama} <br> 
                NIM : {$this->nim} <br>
                Prodi : {$this->prodi} <br>
                Angkatan : {$this->angkatan} <br>
                IP : {$this->ip} <br><br>";
    }
}


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
        return "Mahasiswa baru dengan nama {$this->nama} terdaftar pada tanggal {$this->pendaftaran}<br><br>";
    }

    // overriding method sayHello darii kelas induk Mahasiswa
    public function sayHello()
    {
        return "Halo, nama saya {$this->nama}, Mahasiswa baru yang terdaftar pada tanggal {$this->pendaftaran} <br><br>";
    }

    // overriding method cetakInfo
    public function cetakInfo()
    {
        // Menggunakan parent:: untuk tetap menampilkan sebagian info dari kelas induk
        return parent::cetakInfo() . "Pendaftaran: {$this->pendaftaran} <br><br>";
    }
}


$mhs1 = new Mahasiswa("Benony Gabriel", "105222002", "Ilmu Komputer", 2022, 3.59);

// Membuat objek dari kelas Mahasiswabaru
$mhsBaru = new MahasiswaBaru("Joko Susilo", "105222003", "Teknik Sipil", 2023, 3.75, "12 Juli 2023");

echo $mhs1->sayHello();
echo $mhsBaru->sayHello();

echo "<br>";

echo $mhs1->cetakInfo();
echo $mhsBaru->cetakInfo();
