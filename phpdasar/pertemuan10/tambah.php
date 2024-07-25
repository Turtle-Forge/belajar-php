<?php
require 'functions.php';

// ketika tombol tambah diklik
if (isset($_POST["tambah"])) {


    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        // echo " berhasil";
        echo "
            <script>
                alert('Berhasil menambahkan data');
                document.location.href='index.php';
            </script>
        ";
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
    <h1>Tambah Data Buku</h1>
    <a href="index.php">Kembali</a>
    <form action="" method="post">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Masukkan judul buku" required>
            </li>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Masukkan nama penullis" required>
            </li>
            <li>
                <label for="tahunterbit">Tahun terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy" required>
            </li>
            <li>
                <label for="cover">Cover</label>
                <input type="text" name="cover" id="cover" required>
            </li>
        </ul>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>

</html>