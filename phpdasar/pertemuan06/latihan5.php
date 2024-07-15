<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Books</title>
    <style>
        .card {
            margin: 10px;
            padding: 10px;
            background-color: aquamarine;
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 300px;
            float: left;
        }

        .cover img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .detail {
            margin-left: 20px;
        }

        .detail b {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php
    $books = [
        [
            "cover" => "b1.jpg",
            "title" => "Tangkuban Perahu",
            "author" => "Jake Paul",
            "tt" => 1990
        ],
        [
            "cover" => "b2.jpg",
            "title" => "Gara-gara Lamet",
            "author" => "Sudirman",
            "tt" => 2000
        ],
        [
            "cover" => "b3.jpg",
            "title" => "Maling Kundang",
            "author" => "Thomas",
            "tt" => 1970
        ],
        [
            "cover" => "b4.jpg",
            "title" => "Batu Menangis",
            "author" => "Intan Pertiwi",
            "tt" => 1972
        ],
        [
            "cover" => "b5.jpg",
            "title" => "Borobudur",
            "author" => "Prameswara",
            "tt" => 1990
        ]
    ];
    ?>
    <?php foreach ($books as $book) : ?>
        <div class="card">
            <div class="cover">
                <img src="img/<?php echo $book["cover"]; ?>" alt="img">
            </div>
            <div class="detail">
                <b>Judul:</b> <?= $book["title"]; ?><br>
                <b>Penulis:</b> <?= $book["author"]; ?><br>
                <b>Terbit:</b> <?= $book["tt"]; ?><br>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>