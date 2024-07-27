<?php

require "functions.php";

// ambil data dari link yang dibawa
$id = $_GET["id"];

// cek apakah data berhasil dihapus
if (hapus($id) > 0) {
    echo "<script>alert('Berhasil menghapus data');</script>";
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Gagal menghapus data')</script>";
    header("Location: index.php");
    exit;
}
