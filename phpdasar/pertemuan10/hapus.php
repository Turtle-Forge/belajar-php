<?php
require "functions.php";
$id = $_GET["id"];

if (hapus($id) > 0) {
    header("Location: index.php");
} else {
    echo "<script> alert('Gagal menghapus data'); </script>";
    header("Location: index.php");
}
