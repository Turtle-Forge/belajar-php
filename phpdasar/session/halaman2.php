<?php

// memulai session
session_start();

// karena sudah menjalankan session maka kita bisa mengakses nilai dari halaman1.php melalui variabel session
echo $_SESSION["nama"];
