<?php

// koneksikan ke database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$koneksi = mysqli_connect($hostname, $username, $password, $dbname);

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// tambah data
function tambah($data)
{
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);

    // upload gambar cover
    $cover = upload();
    if (!upload()) {
        return false;
    }


    global $koneksi;

    $query = "INSERT INTO book VALUES('', '$cover', '$title', '$author', '$tahunterbit')";
    mysqli_query($koneksi, $query);

    // mysqli_error($koneksi);

    return mysqli_affected_rows($koneksi);
}


// hapus data
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM book WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}

// ubah data
function ubah($data)
{
    $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $author = htmlspecialchars($data["author"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $gambarLama = htmlspecialchars($data["namaGambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    $cover = htmlspecialchars($data["cover"]);
    if ($_FILES["cover"]["error"] === 4) {
        $cover = $gambarLama;
    } else {
        $cover = upload();
    }


    $query = "UPDATE book SET
                title='$title',
                author='$author',
                tahunTerbitt='$tahunterbit',
                cover='$cover'
            WHERE id=$id";

    global $koneksi;
    mysqli_query($koneksi, $query);

    // mysqli_error($koneksi);

    return mysqli_affected_rows($koneksi);
}


// cari 
function cari($keyword)
{
    // query pencarian
    $query = "SELECT * FROM book WHERE 
                title LIKE '%$keyword%' OR
                author LIKE '%$keyword%' OR
                tahunTerbitt LIKE '%$keyword%'
    
            ";
    return query($query);
}

// upload gambar
function upload()
{
    $namaFile = $_FILES["cover"]["name"];
    $ukuranFile = $_FILES["cover"]["size"];
    $error = $_FILES["cover"]["error"]; // untuk mengetahui apakah ada gambar yang diupload atau tidak(menggunakan nomor error)
    $tmpName = $_FILES["cover"]["tmp_name"]; // tempat penyimpanan file sementara

    // cek apakah tidak ada gambar yang diuploap
    if ($error === 4) { // angka 4 menunjukan error bahwa tidak ada gambar yang diupload
        echo "<script>alert('Belum ada foto')</script>";
        return false;
    }

    // cek apakah file yang diupload adalh benar gambar(jpg/jpeg/pnp. etc)
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang anda upload bukan gambar!');</script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) { // artinya 1MB
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate namaFile baru untuk mengghindari bentrokan antar nama gambar yang sama
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;
    // var_dump($namaFileBaru);
    // die;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);


    return $namaFileBaru;
}


// pendaftaran user
function daftar($data)
{
    global $koneksi;

    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $password = htmlspecialchars(strtolower(mysqli_real_escape_string($koneksi, $data["password"])));
    $password2 = htmlspecialchars(strtolower(mysqli_real_escape_string($koneksi, $data["password2"])));  // konfirmasi password

    // cek apakah username sudah ada di database atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) { // kalu username sudah ada maka akan menghasilkan true
        echo "<script>alert('GAGAL! Username sudadh terdaftar')</script>";
        return false;
    }

    // cek konfirmasi password sama
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password salah');</script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // echo var_dump($password); //cek hasil hashing dari function password_hash

    // $password = md5($password);
    // echo var_dump($password); //cek hasil hashing dari function md5 (note: jangan lagi gunakan md5 hash karena sudah mudah diketahui/tdk aman)

    // tambahkan user baru kedalam database
    mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$email', '$password')");

    return mysqli_affected_rows($koneksi); // akan menghasilkan nilai -1 jika gagal dan 1 jika berhasil
}
