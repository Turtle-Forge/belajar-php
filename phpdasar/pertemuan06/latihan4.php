<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asiosiatif array</title>
</head>

<body>
    <?php
    $students = [
        [
            "nama" => "Benony Gabriel",
            "nim" => "105222002",
            "prodi" => "Ilmu Komputer",
            "akt" => 2022
        ],
        [
            "nama" => "Yosua Mareslos",
            "nim" => "105222030",
            "prodi" => "Ekonomi",
            "akt" => 2016
        ],
        [
            "nama" => "Ariel Noah",
            "nim" => "105222034",
            "prodi" => "Manajemen",
            "akt" => 2018
        ]
    ];
    ?>

    <h1>Daftar Mahasiswa</h1>
    <ul>
        <li><?= $students[0]["nama"] ?></li>
        <li><?= $students[0]["nim"] ?></li>
        <li><?= $students[0]["prodi"] ?></li>
        <li><?= $students[0]["akt"] ?></li>
    </ul>
    <ul>
        <li><?= $students[1]["nama"] ?></li>
        <li><?= $students[1]["nim"] ?></li>
        <li><?= $students[1]["prodi"] ?></li>
        <li><?= $students[1]["akt"] ?></li>
    </ul>
    <ul>
        <li><?= $students[2]["nama"] ?></li>
        <li><?= $students[2]["nim"] ?></li>
        <li><?= $students[2]["prodi"] ?></li>
        <li><?= $students[2]["akt"] ?></li>
    </ul>
</body>

</html>