<?php
require 'functions.php';
$tampilbuku = tampil("SELECT * FROM book");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 10</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Tahun Terbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($tampilbuku as $book) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $book["title"] ?></td>
                <td><?= $book["author"] ?></td>
                <td><?= $book["tahunTerbitt"] ?></td>
                <td><img src="img/<?= $book["cover"] ?>" alt="img" width="75px"></td>
                <td>
                    <a href="">ubah | </a>
                    <a href="hapus.php?id=<?= $book["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?')">hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>