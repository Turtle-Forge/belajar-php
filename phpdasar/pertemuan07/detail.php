<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <img src="img/<?= $_GET["cover"] ?>" alt="img">
    <ul>
        <li><?= $_GET["title"] ?></li>
        <li><?= $_GET["author"] ?></li>
        <li><?= $_GET["tt"] ?></li>
    </ul>

    <br>
    <a href="latihan2.php">Kembali</a>

</body>

</html>