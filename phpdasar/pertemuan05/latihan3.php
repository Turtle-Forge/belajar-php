<?php
$list_mhs = [
    ["Benony Gabriel", "Ilmu Komputer", 2022],
    ["Muhammad Wiwi", "Ilmu Kimia", 2021],
    ["Bintang Akbar", "Teknik Geologi", 2023]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <h1>Daftar Mahsiswa</h1>
    <ul>
        <?php foreach ($list_mhs as $i) : ?>
            <li><?= "Nama : ", $i[0] ?></li>
            <li><?= "Prodi : ", $i[1] ?></li>
            <li><?= "Angkatan : ", $i[2] ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>