<?php

require "functions.php";


// ketika tombol login diklik
if (isset($_POST["login"])) {

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) { // utk mengecek username ditemukan atau tidak. kalau ada maka bernilai 1 

        // cek password nya
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) { // kebalikan dari password_hash() : mengecek password yg dimasukkan user dgn password di database berdaskan username trsbut
            header("Location: index.php");
            exit; // agar skrip dibawah ini tdk dieksekusi
        }
    }

    $error = true;
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / password salah.</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" placeholder="Masukkan username kamu" required>
            </li>
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" placeholder="Masukkan password kamu" required>
            </li>
            <br>
            <li>
                <button name="login" type="submit">Login</button>
            </li>
            <p><i>Belum punya akun?<a href="registrasi.php">Daftar</a></i></p>
    </form>
</body>

</html>