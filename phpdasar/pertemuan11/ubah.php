<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <a href="index.php">Kembali</a>
    <br><br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" placeholder="Masukkan judul buku" value="test" required>
            </li>
            <br>
            <li>
                <label for="author">Author : </label>
                <input type="text" name="author" id="author" placeholder="Penulis buku" value="test" required>
            </li>
            <br>
            <li>
                <label for="tahunterbit">Tahun Terbit : </label>
                <input type="text" name="tahunterbit" id="tahunterbit" placeholder="yyyy" value="test">
            </li>
            <br>
            <li>
                <label for="cover">Cover : </label>
                <input type="text" name="cover" id="cover" placeholder=".png/.jpg/.jpeg" value="test">
            </li>
            <br>

            <button type="submit" name="ubah">Ubah</button>

        </ul>
    </form>
</body>

</html>