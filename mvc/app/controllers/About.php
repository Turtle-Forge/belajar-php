<?php

class About extends Controller
{
    // setiap kali buat method pastikan harus ada method default (index), krna kalo gaada maka akan error
    // berikut ini adalah method default nya
    public function index($nama = "Benony Gabriel", $pekerjaan = "Mahasiswa")
    {

        $data["judul"] = "About";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        // echo "about/index";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page()
    {
        $data["judul"] = "Page";
        $this->view("templates/header", $data);
        $this->view("about/page", $data);
        $this->view("templates/footer");
    }
}
