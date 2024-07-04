<?php

function salam1()
{
    return "Selamat Datang";
}

function salam2($nama)
{
    echo "Selamat Datang, $nama";
}

function salam3($nama, $waktu)
{
    echo "Selamat $waktu, $nama";
}

function salam4($nama = "Benony", $waktu = "Datang")
{
    echo "Selamat $waktu, $nama";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define Function</title>
</head>

<body>
    <h1><?php echo salam1(); ?></h1>
    <h1><?php salam2("Benony"); ?></h1>
    <h1><?php salam3("Benony", "Malam"); ?></h1>
    <h1><?php salam4("Benony"); ?></h1>
</body>

</html>