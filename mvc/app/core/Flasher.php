<?php


class Flasher
{

    // fungsi parameter dalam fungsi dibawah ini:
    // $pesan : untuk menampilkan status atau perubahan yang terjadi pada aksi. baik itu tambah, hapus, dan update. status dapat berupa: berhasil, gagal, etc
    // $aksi : adalah jenis aksi yang dilakukan. misal tambah data, delete, dan update dan sebagainya.
    // $tipe : untuk menyimpan tipe dari kelas bootstrap yang digunakan. misal kalo berhasil maka kelas yang dipakai untuk menampilkan pesan adalah kelas yang berwarna hijau, kalo gagal maka warna merah, kaloo hapuss maka warna merah, kuning dan sebaginya.
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION["flash"] = [
            "pesan" => $pesan,
            "aksi" => $aksi,
            "tipe" => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION["flash"])) {
            echo "
            <div class='alert alert-" . $_SESSION['flash']['tipe'] . " alert-dismissible fade show' role='alert'>
                Data mahasiswa <strong>" . $_SESSION['flash']['pesan'] . "</strong> " . $_SESSION['flash']['aksi'] . "
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>";

            // menghapus sesion
            unset($_SESSION["flash"]);
        }
    }
}
