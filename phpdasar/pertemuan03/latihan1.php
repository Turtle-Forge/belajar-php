<?php
// Pertemuan 3 : Struktur Kendali

// Pengulangan
/* - for
   - while
   - do-while
   - foreach : untuk array
*/

// foor loop
echo "<b>For Loop :</b> <br>";
for ($i = 0; $i < 5; $i++) {
    echo $i + 1, ". Helo <br>";
}

echo "<br><br>";

echo "<b>While Loop :</b> <br>";
$i = 0;
while ($i < 5) {
    echo $i + 1, ". Helo <br>";
    $i++;
}

echo "<br><br>";

echo "<b>Do-While Loop :</b> <br>";
$a = 0;
do {
    echo $a + 1, ". Helo <br>";
    $a++;
} while ($a < 5);
