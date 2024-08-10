<?php

namespace Pertemuan13\App;

abstract class Kendaraan
{
    protected $merk;
    protected $tahun;

    // kelas abstrak harus memiliki setidaknya satu metode abstrak
    abstract protected function getDeskripsi();

    // metode biasa (setter dan getter)
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }
}
