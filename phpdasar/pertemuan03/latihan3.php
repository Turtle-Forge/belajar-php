<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>

    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <?php
    $x = 10;
    if ($x < 20) {
        echo "Benar";
    } else if ($x == 20) {
        echo "Sama";
    } else {
        echo "Salah";
    }
    ?>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor ?>
    </table>

</body>

</html>