<?php
require 'functions.php';

// ambil data dari tabel book / query data book
$books = query("SELECT * FROM book");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>Buku Favorit</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Tahun Terbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $book["title"] ?></td>
                <td><?= $book["author"] ?></td>
                <td><?= $book["tahunTerbitt"] ?></td>
                <td>
                    <img src="img/<?= $book["cover"] ?>" alt="img" style="height: 100px;">
                </td>
                <td>
                    <a href="">ubah | </a>
                    <a href="">hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>