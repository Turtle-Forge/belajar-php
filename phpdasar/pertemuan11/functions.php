<?php

// koneksi ke database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

// tampil data
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
    // ambil data dari setiap kolom dalam form
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $cover = htmlspecialchars($data["cover"]);

    // query sql tambah data
    $query = "INSERT INTO book VALUES ('', '$cover', '$title', '$author', '$tahunterbit')";

    // eksekusi query
    global $koneksi;
    mysqli_query($koneksi, $query);

    // mengembalikan jumlah/status perubahan pada database
    return mysqli_affected_rows($koneksi);
}


// hapus data
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM book WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

// Ubah data
function ubah($data)
{
    // ambil data dari setiap kolom dalam form
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $cover = htmlspecialchars($data["cover"]);



    // query sql ubah/update data
    $query = "UPDATE book SET 
                title='$title', 
                author='$author', 
                tahunTerbitt='$tahunterbit', 
                cover='$cover'
            WHERE id=$id";

    // eksekusi query
    global $koneksi;
    mysqli_query($koneksi, $query);
    echo mysqli_error($koneksi);

    // mengembalikan jumlah/status perubahan pada database
    return mysqli_affected_rows($koneksi);
}
