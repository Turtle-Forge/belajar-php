<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built in Function</title>
</head>

<body>
    <h1>Belajar Function</h1>
    <p>
        Function terdiri dari : <br>
    <ul>
        <li>Built in Function</li>
        <li>User Define Function</li>
    </ul>
    Kita akan belajar satu per satu sampai mahir.
    </p>

    <h3>1. Built in Function</h3>
    <h4>Date</h4>
    <p>
        <b>1. checkdate()</b><br>
        Periksa apakah beberapa tanggal adalah tanggal Gregorian yang valid: <br>
        Syntax : checkdate(month, day, year) <br>
        <?php var_dump(checkdate(12, 31, -400)) ?> <br>
        <?php var_dump(checkdate(07, 03, 2024)) ?> <br>
        <?php var_dump(checkdate(12, 31, 2000)) ?> <br><br>

        <b>2. date()</b> <br>
        <?php echo date("l") ?><br>
        <?php echo date("d") ?><br>
        <?php echo date("m") ?><br>
        <?php echo date("y") ?><br>
        <br>
        <?php echo date("l") ?><br>
        <?php echo date("d") ?><br>
        <?php echo date("m") ?><br>
        <?php echo date("Y") ?><br>
        <br>
        <?php echo date("l, d-M-Y") ?>
        <br><br>

        <b>3. time()</b><br>
        untuk menampilkan detik: <br>
        <?php echo time() ?> <br>
        contoh kombinasi (menentukan n hari kedepan atau kebelakang) : <br>
        contoh menentukan 105 hari kedepan:
        <?php echo date("d-M-Y", time() + 60 * 60 * 24 * 105) ?> <br>
        contoh menentukan 105 hari kebelakang:
        <?php echo date("d-M-Y", time() - 60 * 60 * 24 * 105) ?> <br>
        <br><br>

        <b>3. mktime()</b><br>
        untuk menampilkan detik: <br>
        memiliki 6 parameter mktime(0,0,0,0,0,0) <br>
        Syntax : mktime(jam, menit, detik, bulan, tanggal, tahun) <br>
        contoh untuk mengetahui hari kelahiran saya(17-05-2004): <br>
        <?php echo date("l", mktime(0, 0, 0, 05, 17, 2004)); ?>
        <br><br>

        <b>3. strtotime()</b><br>
        <?php echo date("l", strtotime("17 may 2004")); ?>
    </p>

</body>

</html>