<?php

require "functions.php";

// ketika tombol tambah diklik
if (isset($_POST["tambah"])) {

    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    // cek apakah data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Berhasil menambahkan data');
            document.location.href='index.php';
        </script>";
    } else {
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

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Judul buku" size="40" required>
            </li>
            <br>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Penulis buku" size="40" required>
            </li>
            <br>
            <li>
                <label for="tahunterbit">Tahun terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy" required>
            </li>
            <br>
            <li>
                <label for="cover">Cover : </label>
                <input type="file" name="cover" id="cover" placeholder=".jpg/.jpeg/.png">
            </li>
            <br>
        </ul>
        <button name="tambah" type="submit">Tambah</button>
    </form>
</body>

</html>