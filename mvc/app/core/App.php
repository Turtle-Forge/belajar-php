<?php

class App
{
    public function __construct()
    {
        // echo "Class " . __CLASS__ . " siap!";
        // var_dump($_GET);
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/"); // digunakan utk menghapus simbol slash diakhir url. misal: home/ => jadi home | slash nya dihapus
            $url = filter_var($url, FILTER_SANITIZE_URL); // untuk membesihkan url dari karakter2 yang ngaco yang memungkinkan url kita dihack
            $url = explode("/", $url);
            return $url;
        }
    }
}
