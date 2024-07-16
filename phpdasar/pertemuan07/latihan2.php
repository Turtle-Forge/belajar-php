<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>

<body>
    <?php
    $books = [
        [
            "cover" => "b1.jpg",
            "title" => "Tangkuban Perahu",
            "author" => "Benony Gabriel",
            "tt" => 2020
        ],
        [
            "cover" => "b2.jpg",
            "title" => "Maling Kundang",
            "author" => "Justin",
            "tt" => 2010
        ],
        [
            "cover" => "b3.jpg",
            "title" => "Bajak Laut ",
            "author" => "Glen Sebastian",
            "tt" => 2001
        ]
    ];
    ?>
    <h1>Daftar Buku</h1>
    <?php foreach ($books as $book) : ?>
        <ul>
            <li><a href="detail.php?cover=<?= $book["cover"] ?>&title=<?= $book["title"] ?>&author=<?= $book["author"] ?>&tt=<?= $book["tt"] ?>"><?= $book["title"] ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>