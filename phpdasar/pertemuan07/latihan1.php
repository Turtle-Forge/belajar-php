<?php
// Belajar variabel Scope

$x = 10;

function printX()
{
    global $x;
    echo "x = ", $x;
}

printX();

echo "<br>";

// Variabel SUPERGLOBALS
// - merupakan array asiosiatif
// Variabel superglobal PHP adalah:
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


var_dump($GLOBALS); // karena berisifat array jd kita bisa melihatnya dengan vardump
echo "<br>";
var_dump(10.3);
echo "<br>";
// var_dump($_SERVER);
// var_dump($_SESSION);

// Cara memasukkan value ke array asiosiatif dengan variabel global $_GET:
$_GET["nama"] = "Benony Gabriel";
$_GET["nim"] = "105222002";
var_dump($_GET["nama"]);
echo "<br>";
var_dump($_GET["nim"]);
echo "<br>";
var_dump($_GET["akt"]);
