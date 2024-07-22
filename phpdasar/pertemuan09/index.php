<?php
// Koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $db_name);

// ambil data dari tabel book / query data book
$result = mysqli_query($koneksi, "SELECT * FROM book");

// echo var_dump($result);

// cara ambil data (fetch) book dari objek $result :
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assiosiatif
// mysqli_fetch_array() // mengembalikan array assisiatif dan numerik
// mysqli_fetch_objek() // mengemballikan object
// ==============================

// // mysqli_fetch_row()
// $book_info = mysqli_fetch_row($result);
// echo var_dump($book_info);
// echo "<br>";
// echo var_dump($book_info[2]);

// echo "<br><br>";

// // mysqli_fetch_assoc()
// $book_info = mysqli_fetch_assoc($result);
// echo var_dump($book_info);
// echo "<br>";
// echo var_dump($book_info["title"]);

// echo "<br><br>";

// // mysqli_fetch_array()
// $book_info = mysqli_fetch_array($result);
// echo var_dump($book_info);
// echo "<br>";
// echo var_dump($book_info["title"]);
// echo "<br>";
// echo var_dump($book_info[2]);

// echo "<br><br>";

// // mysqli_fetch_object()
// $book_info = mysqli_fetch_object($result);
// echo var_dump($book_info);
// echo "<br>";
// echo var_dump($book_info->title);

// Kita akan menggunakan fetch assiosiatif

// while ($book_info = mysqli_fetch_assoc($result)) {
//     echo "Title : ", var_dump($book_info["title"]);
//     echo "<br>";
// }

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["title"] ?></td>
                <td><?= $row["author"] ?></td>
                <td><?= $row["tahunTerbitt"] ?></td>
                <td>
                    <img src="img/<?= $row["cover"] ?>" alt="img" style="height: 100px;">
                </td>
                <td>
                    <a href="">ubah | </a>
                    <a href="">hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>

    </table>
</body>

</html>