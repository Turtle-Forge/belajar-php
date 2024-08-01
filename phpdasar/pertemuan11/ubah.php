<?php
require "functions.php";

// ambil id dari url
$id = $_GET["id"];

$book = query("SELECT * FROM book WHERE id = $id")[0]; // tambah indeks ke 0 karena didalam array book yang telah diisi tersebut karena dibungkus oleh satu buah array numerik, jadi kalo mau mengaksesnya harus menambahkan indeks terluarnya (array dua dimensi, misal echo $book[0]["title"])
// echo var_dump($book);
// echo $book["title"];
// echo $book[0]["title"];


// ketika tombol ubah ditekan 
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diupdate
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil mengubah data');
                document.location.href='index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal mengubah data');
            </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $book["id"] ?>">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Masukkan judul buku" value="<?= $book["title"] ?>" required>
            </li>
            <br>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Penulis buku" value="<?= $book["author"] ?>" required>
            </li>
            <br>
            <li>
                <label for="tahunterbit">Tahun Terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy" value="<?= $book["tahunTerbitt"] ?>">
            </li>
            <br>
            <li>
                <label for="cover">Cover : </label>
                <input type="text" name="cover" id="cover" placeholder=".png/.jpg/.jpeg" value="<?= $book["cover"] ?>">
            </li>
            <br>

            <button type="submit" name="ubah">Ubah</button>

        </ul>
    </form>
</body>

</html>