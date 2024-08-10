<?php

namespace Pertemuan13\App;

// Kelas konkret Mobil yang mengimplementasikan metode dari kelas abstrak Kendaraan
class Mobil extends Kendaraan
{
    private $jumlahPintu;

    public function setJumlahPintu($jumlahPintu)
    {
        $this->jumlahPintu = $jumlahPintu;
    }

    // Implementasi metode abstrak dari kelas Kendaraan
    public function getDeskripsi()
    {
        return "=INFO= <br>
                Mobil : $this->merk <br>
                Tahun : $this->tahun <br>
                Jumlah Pintu : $this->jumlahPintu <br>
        ";
    }
}
