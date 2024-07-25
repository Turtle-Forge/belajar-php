<?php
// koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

// fungsi untuk menampilkan data
function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
