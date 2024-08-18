<?php

class About
{
    // setiap kali buat method pastikan harus ada method default (index), krna kalo gaada maka akan error
    // berikut ini adalah method default nya
    public function index($nama = "Benony", $pekerjaan = "Mahasiswa")
    {
        // echo "about/index";
        echo "halo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo "about/page";
    }
}
