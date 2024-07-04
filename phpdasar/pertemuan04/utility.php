<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiliti function</title>
</head>

<body>
    <h3>isset()</h3>
    <p>Fungsi isset() digunakan untuk memeriksa apakah sebuah variabel telah didefinisikan dan tidak berada dalam keadaan null. Hasilnya adalah true jika variabel ada dan nilainya bukan null, dan false jika variabel tidak ada atau nilainya null.</p>

    <b>Contoh</b>

    <?php

    $var = 10;

    if (isset($var)) {
        echo "Variabel \$var sudah didefinisikan";
    } else {
        echo "Variabel \$var belum didefinisikan";
    }

    ?>

    <br><br>
    <h3>empty()</h3>
    <p>Fungsi empty() digunakan untuk memeriksa apakah sebuah variabel kosong. Sebuah variabel dianggap kosong jika:
    <ul>
        <li>Tidak didefinisikan.</li>
        <li>Nilainya null.</li>
        <li>Nilainya false.</li>
        <li>Nilainya nol (0) sebagai string atau integer.</li>
        <li>Nilai string kosong "" (string kosong).</li>
        <li>Array tanpa elemen.</li>
    </ul>
    </p>

    <b>Contoh:</b>
    <?php

    $my_var = "";
    if (empty($my_var)) {
        echo "Variabel \$my_var kosong atau belum didefinisikan.";
    } else {
        echo "Variabel \$my_var kosong atau belum didefinisikan.";
    }

    ?>
</body>

</html>