<?php
// Part 3: Variabel dan Tipe Data

// Untuk membuat sebuah variabel maka gunakan simbol dolar $
// Konsepnya sama dengan variabel pada Python / JavaScript, namun diawali dengan simbol dolar yang menandakan bahwa itu adalah sebuah variabel

// Contoh:
$nama = "Beno";
$umur = 20;
$ipk = 3.92;
$status = true;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // Pertemuan 2 - PHP Dasar

    // Part 1: Komentar

    // Ini adalah komentar
    // ini juga komentar
    /*
        ini juga komentarr
        komentar
        komentar
        komentar
        komentar
        komentar
        komentar
    */
    ?>

    <?php
    // Part 2: Standar Output

    // Untuk mencetak sesuatu ke layar:
    // - echo, print : untuk mencetek variabel / sesuatu ke layar, mirip sout pada java atau C++
    // - print_r : untuk mencetak array
    // - var_dump : biasanya untuk mencetak nilai dari sebuah variabel (untuk keperluan debuging)

    echo "Hello my name is Beno";
    // print("Hello how are you");
    // print_r("Hellow good morning");
    // var_dump("goodbye");

    ?>

    <h1><?php echo "Hello my name is Beno"; ?></h1>
    <h3><?php print('Hello how are you'); ?></h3> <?php // bisa menggunakan kutip dua maupun kutip satu
                                                    ?>

    <h3><?php print_r("Hellow good morning"); ?></h3>
    <h3><?php var_dump("goodbye"); ?></h3>
    <h3><?php echo true ?></h3>
    <h3><?php echo false ?></h3>

    <?php

    // Penulisan sintaks php:
    // 1. Sintaks php dalam tag HTML
    // 2. Sintaks HTML dalam tag PHP
    ?>

    <!-- Contoh sintaks php dalam HTML -->
    <h3>Selamat datang <?php echo "Beno"; ?></h3>
    <p><?php echo "ini adalah paragraph"; ?></p>

    <?php
    // Contoh sintaks HTML dalam php
    echo "<h1>Hallo selamat datang Beno</h1>";
    ?>

    <!-- Penulisan yang kedua tidak disarankan -->
    <!-- Kita akan banyak menggunakan penulisan sintaks kesatu (php dalam html) -->

    <h3>Data Mahasiswa</h3>
    <p>
        Nama : <?php echo $nama; ?> <br>
        Umur : <?php echo $umur; ?> <br>
        IPK : <?php echo $ipk; ?> <br>
        Status : <?php echo $status; ?>
    </p>

    <h4><?php echo "Hello nama saya $nama"; ?></h4>
    <h4>Hello nama saya <?php echo $nama; ?></h4>
    <h4>Hello nama saya <?php echo "$nama, umur saya $umur"; ?></h4>
    <!-- Penggunaan kutip satu dan dua beda artian dalam pemanggilan sebuah variabel -->
    <h4>Hello nama saya <?php echo '$nama'; ?></h4>

    <!-- Operasi Aritmatika -->
    <h1>Operasi Aritmatika</h1>
    <p>
        Operasi aritmatika : + - * / <br>
        <?php echo 20 + 10; ?> <br>
        <?php echo " 20 + 20 = ", (20 + 10); ?> <br>
        <?php
        $x = 50;
        $y = 10;
        $z = 2.0;
        $a = 2.5;
        $aa = $y / $a;
        echo "$x + $y = ", ($x + $y);
        ?><br>
        <?php echo "Var x = ", var_dump($x); ?> <br>
        <?php echo "Var z = ", var_dump($z); ?> <br>
        <?php echo "Nama = ", var_dump($nama); ?> <br>
        <?php echo "$x / $y = ", ($x / $y); ?> <br>
        <?php echo "$y / $z = ", ($y / $z); ?> <br>
        <?php echo "$y / $a = ", ($y / $a); ?> <br>
        <?php echo "Var aa = ", var_dump($aa); ?> <br>
        <?php echo "Var status = ", var_dump($status); ?> <br>
    </p>

    <!-- Penggabungan String / Concatenation / concat -->
    <!-- Pada php menggunakan simbol titik `.` -->
    <p>
        Penggabungan String <br>
        <?php
        $fname = "Benony";
        $lname = " Gabriel";
        echo "Nama : " . $fname . $lname;
        ?>

        <br>
        <br>

        <!-- Operator Assigment -->
        Operator Assigment
        <br>
        Berupa: = , +=, -=, *=, /=, %=, !=, .=
        <br>
        <?php
        $a = 1;
        $b = 3;
        echo $a . "<br>";
        $a += 5;
        echo $a . "<br>";
        $a += $b;
        echo $a . "<br>";

        $fname .= $lname;
        echo "Nama : " . $fname;

        ?>

        <br>
        <br>
        <b>Operator Pembanding</b>
        <br>
        berupa : <,>, <=,>=, ==
                <br>
                <?php
                echo "1 < 5 = ", var_dump(1 < 5), "<br>";
                echo "a >= b = ", ($a >= $b), "<br>";
                echo var_dump(1 == "1"), "<br>";
                echo var_dump('a'), "<br>";
                ?>

                <br>
                <br>
                <b>Operator Identtitas</b>
                <br>
                berupa : ===, !==;
                <br>
                <?php
                echo var_dump(1 === "1");
                ?>
                <br>
                <br>
                <b>Operator Logika</b>
                <br>
                berupa : &&, ||, !;
                <br>
                <?php
                echo var_dump(10 < 20 && 10 % 2 == 0), "<br>";
                echo var_dump(10 < 20 && 10 % 2 == 1);
                ?>
    </p>


</body>

</html>