<?php
require "functions.php";
$data = tampildata("SELECT * FROM book");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>Data Buku</h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Tahun Terbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($data as $book) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $book["title"] ?></td>
                <td><?= $book["author"] ?></td>
                <td><?= $book["tahunTerbitt"] ?></td>
                <td>
                    <img src="img/<?= $book["cover"] ?>" alt="img" height="75px">
                </td>
                <td>
                    <a href="">Ubah | </a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>