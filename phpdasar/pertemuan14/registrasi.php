<?php
require "functions.php";


// ketika tombol daftar diklik
if (isset($_POST["daftar"])) {

    // cek apakah berhasil daftar
    if (daftar($_POST) > 0) {
        echo "<script>alert('Berhasil mendaftar')</script>";
    } else {
        echo mysqli_error($koneksi);
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" placeholder="Masukkan username anda" required>
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" placeholder="Masukkan email anda" required>
            </li>
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" placeholder="Masukkan password anda" required>
            </li>
            <br>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2" placeholder="Konfirmasi password anda" required>
            </li>
            <br>
            <li>
                <button name="daftar" type="submit">Daftar</button>
            </li>
        </ul>
    </form>
</body>

</html>