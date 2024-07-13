<?php
$my_num = [10, 20, 30, 40, 50, 60, 70, 80, 90];

echo "Isi array my_num : ";
foreach ($my_num as $i) {
    echo $i . " ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            margin: 10px;
            padding: 10px;
            background-color: blueviolet;
            color: white;
            height: 50px;
            width: 50px;
            text-align: center;
            line-height: 10px;
            float: left;
        }
    </style>
</head>

<body>
    <div class="my-box">
        <?php foreach ($my_num as $i) : ?>
            <div class="box">
                <h1><?php echo $i ?></h1>
            </div>
        <?php endforeach ?>
    </div>
    <?php for ($j = 0; $j < sizeof($my_num); $j++) : ?>
        <div class="box">
            <h1><?php echo $my_num[$j] - 9   ?></h1>
        </div>
    <?php endfor ?>

</body>

</html>