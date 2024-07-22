<?php
// Koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $db_name);
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
