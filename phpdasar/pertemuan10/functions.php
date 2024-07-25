<?php
// koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

function tampil($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    // ambil data dari setiap kolom dalam form
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $cover = htmlspecialchars($data["cover"]);

    // query insert data
    $query = "INSERT INTO book VALUES
                ('', '$cover', '$title', '$author', '$tahunterbit')
            ";
    global $koneksi;
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM book WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
