<?php
require "functions.php";

// mengambil id yang dibawa dari link dan menyimpannya ke dalam varibel id
$id = $_GET["id"];

// cek apakah berhasil menghapus
if (hapus($id) > 0) {
    header("Location: index.php");
} else {
    echo "<script>
            alert('Gagal menghapus data');
        </script>";
    header("Location: index.php");
}
