<?php
require "functions.php";

$books = query("SELECT * FROM book");

// ketika tombol cari diklik
if (isset($_POST["cari"])) {
    $books = cari($_POST["keyword"]);
} else if (isset($_POST["reset"])) {
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
</head>

<body>
    <h1>Daftar Buku </h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Masukkan kata kunci..." autofocus>
        <button name="cari" type="submit">Cari</button>
        <button name="reset" type="submit">Reset</button>
    </form>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Author</th>
            <th>Tahun terbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>

        <?php $id = 1; ?>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $book["title"] ?></td>
                <td><?= $book["author"] ?></td>
                <td><?= $book["tahunTerbitt"] ?></td>
                <td>
                    <img src="img/<?= $book["cover"] ?>" alt="img" height="80px">
                </td>
                <td>
                    <a href="ubah.php?id=<?= $book['id'] ?>">ubah |</a>
                    <a href="hapus.php?id=<?= $book['id'] ?>" onclick="return confirm('Ingin menghapus data?')">hapus</a>
                </td>
            </tr>
            <?php $id++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>