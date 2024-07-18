<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar POST</title>
</head>

<body>
    <form action="post.php" method="post"> <!-- Secara defaul menggunakan method get, namu method get kurang aman. untuk itu kita harus menggunakan method post karena datanya dilindungi. kalau get datanya dapat terlihat dari link/url. dan kalau actionnya dikosongkan maka secara default akan mengirmkan data ke dirinya sendiri atau halaman ini sendiri. -->
        <label for="username">Nama: </label>
        <input type="text" name="nama" id="username" placeholder="Masukkan nama kamu">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>