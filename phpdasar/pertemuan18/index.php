<?php
// jalankan session
session_start();
require "functions.php";

// cek apakah ada session
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


// pagination
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM book"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$dataAwal = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$books = query("SELECT * FROM book LIMIT $dataAwal, $jumlahDataPerHalaman"); // keyword limit untuk membatasi data yang mau ditampilkan (LIMIT index, bnyak_data)

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
    <title>Upload File</title>
</head>

<body>
    <a href="logout.php">Logout</a>
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
                <td><?= $id + $dataAwal ?></td>
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
    <br>

    <!-- link navigasi pagination -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&lt;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&gt;</a>
    <?php endif; ?>
</body>

</html>