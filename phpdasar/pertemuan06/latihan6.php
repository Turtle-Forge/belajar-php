<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Asiosiatif Array</title>
    <style>
        .box {
            background-color: cadetblue;
            margin: 10px;
            padding: 5px;
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            max-width: 250px;
        }

        .box img {
            max-width: 100px;
            border-radius: 50%;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $students = [
        [
            "avatar" => "b1.jpg",
            "nama" => "Benony Gabriel",
            "nim" => "105222002",
            "akt" => 2022
        ],
        [
            "avatar" => "b2.jpg",
            "nama" => "Michael Ratusehaka",
            "nim" => "105222012",
            "akt" => 2021
        ],
        [
            "avatar" => "b3.jpg",
            "nama" => "Jhon Doe",
            "nim" => "105222032",
            "akt" => 2023
        ]
    ];

    ?>

    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($students as $mhs) : ?>
        <div class="box">
            <img src="img/<?= $mhs["avatar"]; ?>" alt="img">
            <ul>
                <li><?= $mhs["nama"]; ?></li>
                <li><?= $mhs["nim"]; ?></li>
                <li><?= $mhs["akt"]; ?></li>
            </ul>
        </div>
    <?php endforeach; ?>
</body>

</html>