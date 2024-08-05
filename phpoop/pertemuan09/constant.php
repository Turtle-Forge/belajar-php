<?php


// ada dua cara membuat constant. (constant adalah variabel yang nilai nya kalau sudah di set maka tidak bisa diubah)

// cara 1 : menggunakan define("VARNAME", value)
define("NAMA", "Benony Gabriel"); // artinya membuat variabel constant dengan nama "NAMA" yang nilainya adalah "Benony Gabriel"

// Cara menampilkannnya pun sangat mudah, seperti cara biasanya yaitu dengan menggunakan echo
echo NAMA; // bedanya tidak menggunakan simbol dollar


// Note: Variabel constant harus dibuat dengan huruf kapital

echo "<br>";

// cara 2: dengan menggunakan keyword const
const UMUR = 20;
echo UMUR;


/**PERBEDAAN
 * - kalau menggunakan define(), kita tidak bisa menyimpannya di dalam kelas. harus dibuat diluar kelas (sebagai konstanta global)
 * - kalau const bisa kita buat di dalam kelas, sehingan yang akan kita gunakan di dalam oop adalah dengan menggunakan const 
 * 
 */


class Coba
{
    // define("NAMA", "Beno"); // error


    // menggunakan const keyword
    const NAMA = "Benony Gabriel";
}


echo "<hr>";
// cara mengaksesnya sama dengan mengakses static keyword
echo Coba::NAMA;


echo "<br><br>";

// MAGIC CONSTANT Bawaan PHP:
echo __LINE__, "<br>";
// var_dump(__LINE__);
echo __FILE__, "<br>"; // bisa kita rangkai line dan file untuk mendeteksi kesalahan pada file
echo __DIR__, "<br>";
var_dump(__DIR__);
echo __FUNCTION__, "<br>";
var_dump(__FUNCTION__);
echo __CLASS__, "<br>";
var_dump(__CLASS__);
echo __TRAIT__, "<br>";
var_dump(__TRAIT__);
echo __METHOD__, "<br>";
var_dump(__METHOD__);
echo __NAMESPACE__, "<br>";
var_dump(__NAMESPACE__);
