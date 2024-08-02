<?php

// jalankan session
session_start();

// cek apakah ada session
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// hubungkan file
require "functions.php";

// ambil data dari url
$id = $_GET["id"];
$data = query("SELECT * FROM book WHERE id=$id")[0];
// var_dump($data);


// ketika tombol ubah diklik
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Berhasil ubah data');
            document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal ubah data');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="namaGambarLama" value="<?= $data['cover'] ?>">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Judul buku" size="40" value="<?= $data['title'] ?>" required>
            </li>
            <br>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Penulis buku" size="40" value="<?= $data['author'] ?>" required>
            </li>
            <br>
            <li>
                <label for="tahunterbit">Tahun terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy" value="<?= $data['tahunTerbitt'] ?>" required>
            </li>
            <br>
            <li>
                <label for="cover">Cover : </label><br>
                <img src="img/<?= $data['cover'] ?>" alt="img" width="80px"><br>
                <input type="file" name="cover" id="cover" placeholder=".jpg/.jpeg/.png">
            </li>
            <br>
        </ul>
        <button name="ubah" type="submit">Ubah</button>
    </form>

</body>

</html>