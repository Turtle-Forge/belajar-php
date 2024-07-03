<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function String</title>
</head>

<body>
    <h3>strlen()</h3>
    <p>Untuk menghitung panjang string</p>
    <?php echo "Hello : " . strlen("Hello") ?>

    <h3>strcmp()</h3>
    <p>(compare) untuk membandingkan dua buah string (Case sensitif)</p>
    <?php echo strcmp("Hello", "hello") ?> <br>
    <?php echo strcmp("hello", "Hello") ?> <br>
    <?php echo strcmp("HELLO", "Hello") ?> <br>
    <?php echo strcmp("HEllO", "Hello") ?> <br>

    <h3>explode()</h3>
    <p>Untuk memecah string menjadi array</p>
    <?php
    $str = "Hello world. It is a beautiful day.";
    // echo explode(" ", $str);
    print_r(explode(" ", $str));
    ?>

    <h3>htmlspecialchars()</h3>
    <p>Fungsi htmlspecialchars() mengonversi beberapa karakter standar ke entitas HTML. <br>

        Karakter yang telah ditentukan sebelumnya adalah: <br>
    <ul>
        <li>& (ampersand) menjadi &</li>
        <li>" (tanda kutip ganda) menjadi "</li>
        <li>' (kutipan tunggal) menjadi &#039;</li>
        <li>&lt; (kurang dari) menjadi &gt;</li>
    </ul>
    <b>Contoh:</b>
    </p>
    <?php
    $myStr = "This is some <b>bold</b> text."
    ?>

</body>

</html>