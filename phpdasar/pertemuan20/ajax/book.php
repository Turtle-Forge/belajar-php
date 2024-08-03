<?php

// sleep(1); // sleep selama 1 detik

require "../functions.php";

$keyword = $_GET["keyword"];
$query = "SELECT * FROM book WHERE 
                title LIKE '%$keyword%' OR
                author LIKE '%$keyword%' OR
                tahunTerbitt LIKE '%$keyword%'
    
            ";
$books = query($query);
?>

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