<?php
require_once "classes/TransferBank.php";
require_once "classes/Ipembayaran.php";
require_once "classes/KartuKredit.php";
function lakukanPembayaran(Pembayaran $metodePembayaran, $jumlah)
{
    $metodePembayaran->prosesPembayaran($jumlah);
}


$transferBank = new TransferBank();
$kartuKredit = new KartuKredit();

lakukanPembayaran($transferBank, 500000);
echo "<br>";
lakukanPembayaran($kartuKredit, 100000);
