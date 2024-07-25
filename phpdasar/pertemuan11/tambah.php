<?php
require "functions.php";

// ketika tombol tambah sudah diklik?
if (isset($_POST["tambah"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        // berhasil
        echo "<script>
                alert('Berhasil menambahkan data');
                document.location.href='index.php';
            </script>";
        // header("Location: index.php");
        // exit;
    } else {
        // gagal
        echo "<script>
                alert('Gagal menambahkan data');
            </script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="" method="post">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Masukkan judul buku" required>
            </li>
            <br>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Penulis buku" required>
            </li>
            <br>
            <li>
                <label for="tahunterbit">Tahun Terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy">
            </li>
            <br>
            <li>
                <label for="cover">Cover : </label>
                <input type="text" name="cover" id="cover" placeholder=".png/.jpg/.jpeg">
            </li>
            <br>

            <button type="submit" name="tambah">Tambah</button>

        </ul>
    </form>
</body>

</html>