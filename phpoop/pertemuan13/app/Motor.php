<?php

namespace Pertemuan13\App;

// Kelas konkret Motor yang juga mengimplementasikan metode dari kelas abstrak Kendaraan
class Motor extends Kendaraan
{
    private $tipe;

    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }

    // Implementasi metode abstrak dari kelas Kendaraan
    public function getDeskripsi()
    {
        return "=INFO= <br>
                Motor : $this->merk <br>
                Tahun : $this->tahun <br>
                Tipe : $this->tipe <br>
        ";
    }
}
