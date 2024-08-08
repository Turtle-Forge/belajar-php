<?php
require_once "Ipembayaran.php";

class KartuKredit implements Pembayaran
{

    public function prosesPembayaran($jumlah)
    {
        echo "Memproses pembayaran sebesar Rp$jumlah melalui Kartu Kredit.\n";
    }
}
