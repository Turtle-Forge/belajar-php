<?php

require_once "Ipembayaran.php";

class TransferBank implements Pembayaran
{
    public function prosesPembayaran($jumlah)
    {
        echo "Memproses pembayaran sebesar Rp$jumlah melalui Transfer Bank.\n";
    }
}
