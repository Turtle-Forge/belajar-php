<?php
// Review array

// Membuat array
$hari = array("Senin", "Selasa", "Rabu");
$my_num = [1, 2, 3];
$my_arr = ["Satu", 0.5, true, 10, "Januari"];

// Menampilkan array
echo "\$hari[0] : ", $hari[0];
echo "<br>";
echo "\$my_num : ";
foreach ($my_num as $i) {
    echo $i . " ";
}
echo "<br>";
echo "\$my_arr : ";
for ($i = 0; $i < sizeof($my_arr); $i++) {
    echo $my_arr[$i], " ";
}

echo "<br>";

// Menampilkan array untuk keperluan debugging
echo "var_dump(\$hari) : ", var_dump($hari);
echo "<br>";
echo "print_r(\$my_num) : ", print_r($my_num);
