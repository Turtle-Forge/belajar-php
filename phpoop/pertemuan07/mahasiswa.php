<?php

class Mahasiswa
{
    // ini adalah properti dari kelas Mahasiswa
    private $nama;
    private $nim;
    private $prodi;
    private $angkatan;
    private $ip;

    // membuat consturctor
    public function __construct($nama, $nim, $prodi, $angkatan, $ip)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->angkatan = $angkatan;
        $this->ip = $ip;
    }

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


    // setter dan getter
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    public function getAngkatan()
    {
        return $this->angkatan;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }
}


// membuat kelas MahasiswaBaru yang mewarisi kelas Mahasiswa
class MahasiswaBaru extends Mahasiswa
{
    private $pendaftaran;

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
        return "Mahasiswa baru dengan nama {$this->getNama()} terdaftar pada tanggal {$this->pendaftaran}<br><br>";
    }

    // overriding method sayHello darii kelas induk Mahasiswa
    public function sayHello()
    {
        return "Halo, nama saya {$this->getNama()}, Mahasiswa baru yang terdaftar pada tanggal {$this->pendaftaran} <br><br>";
    }

    // overriding method cetakInfo
    public function cetakInfo()
    {
        // Menggunakan parent:: untuk tetap menampilkan sebagian info dari kelas induk
        return parent::cetakInfo() . "Pendaftaran: {$this->pendaftaran} <br><br>";
    }


    public function setPendaftaran($pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }

    public function getPendaftaran()
    {
        return $this->pendaftaran;
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




// Penjelasan:
// Overriding sayHello: Kelas MahasiswaBaru menimpa metode sayHello dari kelas Mahasiswa untuk memberikan pesan yang berbeda.

// Overriding cetakInfo: Metode cetakInfo di kelas MahasiswaBaru juga diubah untuk menambahkan informasi pendaftaran. Namun, metode ini juga memanggil parent::cetakInfo() untuk mempertahankan bagian dari fungsionalitas asli dari kelas Mahasiswa.
