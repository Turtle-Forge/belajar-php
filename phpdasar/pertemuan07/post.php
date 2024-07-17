<?php
if (!isset($_POST["nama"])) {
    // redirect
    header("Location: latihan3.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <h1>Selamat datang <?= $_POST["nama"] ?></h1>
    <br><br>

    <a href="latihan3.php">Kembali</a>

</body>

</html>