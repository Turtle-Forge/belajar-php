<?php
// cek apakah tombol submit sudah di klik atau belum
if (isset($_POST["submit"])) {
    // cek apakah username dan password benar
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin123") {
        // redirect ke admin page
        header("Location: admin.php");
        exit;
    } else {
        // kalo salah
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan POST</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username/Password salah.</p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username" placeholder="Masukkan username"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" placeholder="Masukkan password"><br>
        <button type="submit" name="submit">Masuk</button>
    </form>
</body>

</html>