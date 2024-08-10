<?php

/*
config.php adalah file yang sering digunakan dalam proyek PHP untuk menyimpan konfigurasi aplikasi yang bersifat global atau sering digunakan di berbagai bagian aplikasi. Ini termasuk informasi seperti kredensial database, pengaturan server, konstanta, dan konfigurasi lainnya. Penggunaan file config.php memungkinkan Anda untuk mengelola pengaturan aplikasi dengan lebih mudah dan menjaga konsistensi di seluruh proyek.
 */


/*
Umum Digunakan untuk Menyimpan:
Kredensial Database:

Hostname, username, password, dan nama database.
Menyimpan pengaturan ini dalam satu file memudahkan untuk mengubahnya tanpa harus memperbarui banyak file.
 */

// Pengaturan database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "contohdb");

// menghubungkan ke database
$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// periksa koneksi
if (!$koneksi) {
    echo "Koneksi ke database GAGAL! : " . mysqli_connect_error();
}


// Konstanta Global:

// Misalnya, URL dasar aplikasi, pengaturan path untuk file atau direktori, atau konstanta lain yang digunakan di banyak tempat.

// URL dasar aplikasi
define('BASE_URL', 'http://localhost/project/');

// Path untuk direktori upload
define('UPLOAD_DIR', 'uploads/');


// Pengaturan Debugging dan Error:

// Menyimpan pengaturan untuk mode debugging, logging, atau penanganan kesalahan.
// Mode debugging
define('DEBUG_MODE', true);

if (DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

// Pengaturan Lainnya:

// API keys, timezone, pengaturan bahasa, atau opsi konfigurasi lainnya yang dibutuhkan oleh aplikasi.
// API key
define('API_KEY', 'your_api_key_here');

// Timezone
date_default_timezone_set('Asia/Jakarta');


// Keuntungan Menggunakan config.php:
// Pemeliharaan Mudah: Semua pengaturan penting berada di satu tempat, membuatnya lebih mudah untuk diubah tanpa harus memodifikasi banyak file.
// Mengurangi Pengulangan Kode: Anda tidak perlu mendefinisikan ulang pengaturan yang sama di beberapa file.
// Konsistensi: Semua bagian aplikasi menggunakan konfigurasi yang sama, sehingga mengurangi risiko kesalahan akibat pengaturan yang tidak konsisten.
// Kesimpulan:
// config.php adalah file yang sangat berguna untuk mengelola pengaturan aplikasi secara terpusat, menjaga kode Anda tetap bersih, mudah dipelihara, dan konsisten.