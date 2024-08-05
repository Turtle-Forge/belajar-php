<?php

// belajar static keyword. konsepnya sama dengan oop pada java

class CobaStatic
{
    public static $angka = 1;

    public static function sayHello()
    {
        return "Halo " . self::$angka++ . " kali <br>";
    }
}


class NonStatic
{
    public $angka = 1;

    public function sayHello()
    {
        return "Halo " . $this->angka++ . " kali <br>";
    }
}




// cetak static
echo CobaStatic::sayHello();
echo CobaStatic::sayHello();
echo CobaStatic::sayHello();
echo "<br>";
echo CobaStatic::sayHello();
echo CobaStatic::sayHello();
echo CobaStatic::sayHello();

echo "<hr>";

// cetak non static
$obj = new NonStatic;
echo $obj->sayHello();
echo $obj->sayHello();
echo $obj->sayHello();
echo "<br>";
$obj2 = new NonStatic;
echo $obj2->sayHello();
echo $obj2->sayHello();
echo $obj2->sayHello();
