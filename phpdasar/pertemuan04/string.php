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
    <p>Fungsi htmlspecialchars() dalam PHP digunakan untuk mengkonversi karakter-karakter khusus HTML menjadi entitas HTML. Hal ini diperlukan untuk mencegah serangan injeksi skrip lintas situs (cross-site scripting, XSS) dengan mengubah karakter-karakter tersebut menjadi bentuk yang tidak dieksekusi secara langsung oleh browser.

        Berikut adalah beberapa poin penting tentang htmlspecialchars():

        Tujuan Utama: Mencegah serangan XSS dengan mengubah karakter-karakter khusus seperti <,>, &, ", dan ' menjadi entitas HTML yang aman. Misalnya, < akan diubah menjadi &lt; dan> menjadi &gt;.

                Penggunaan Umum: Biasanya digunakan saat menampilkan data dari pengguna, seperti input formulir atau data dari database, yang mungkin mengandung karakter khusus yang perlu dihindari dalam konteks HTML. <br>

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
    $input = '<script>alert("Hello XSS!");</script>';
    $safe_output = htmlspecialchars($input);
    echo $safe_output;
    ?>

</body>

</html>