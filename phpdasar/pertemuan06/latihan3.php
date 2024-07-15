<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <style>
        .box {
            height: 50px;
            width: 50px;
            background-color: brown;
            color: white;
            text-align: center;
            line-height: 50%;
            float: left;
            margin: 10px;
            transition: 0.1s ease-in-out;
        }

        .clear {
            clear: both;
        }

        .box:hover {
            border-radius: 50%;
            border: 3px solid blue;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php
    $numbers = [[10, 20, 30], [40, 50, 60], [70, 80, 90]]
    ?>

    <?php foreach ($numbers as $i) : ?>
        <?php foreach ($i as $j) : ?>
            <div class="box">
                <h1><?= $j ?></h1>
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>