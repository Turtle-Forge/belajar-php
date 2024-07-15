<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: brown;
            margin: 10px;
            color: white;
            text-align: center;
            line-height: 50%;
            float: left;
            transition: 0.1s;
        }

        .box:hover {
            border-radius: 50%;
            cursor: pointer;
            border: 3px solid black;
        }
    </style>
</head>

<body>
    <?php
    $num = [10, 20, 30, 40, 50, 60, 70, 80, 90];
    ?>

    <?php foreach ($num as $i) : ?>
        <div class="box">
            <h1><?php echo $i ?></h1>
        </div>
    <?php endforeach; ?>
</body>

</html>