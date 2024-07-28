<?php

// koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// tambah data
function tambah($data)
{
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $cover = htmlspecialchars($data["cover"]);

    global $koneksi;

    $query = "INSERT INTO book VALUES('', '$cover', '$title', '$author', '$tahunterbit')";
    mysqli_query($koneksi, $query);

    // mysqli_error($koneksi);

    return mysqli_affected_rows($koneksi);
}


// hapus data
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM book WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}

// ubah data
function ubah($data)
{
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $cover = htmlspecialchars($data["cover"]);


    $query = "UPDATE book SET
                title='$title',
                author='$author',
                tahunTerbitt='$tahunterbit',
                cover='$cover'
            WHERE id=$id";

    global $koneksi;
    mysqli_query($koneksi, $query);

    // mysqli_error($koneksi);

    return mysqli_affected_rows($koneksi);
}


// cari 
function cari($keyword)
{
    // query pencarian
    $query = "SELECT * FROM book WHERE 
                title LIKE '%$keyword%' OR
                author LIKE '%$keyword%' OR
                tahunTerbitt LIKE '%$keyword%'
    
            ";
    return query($query);
}
