<?php

class App
{
    protected $controller = "Home"; // controller default
    protected $method = "index"; // method default
    protected $params = [];

    public function __construct()
    {
        // Parse URL untuk mendapatkan controller, method, dan parameter
        $url = $this->parseURL();

        // Cek apakah controller yang diminta ada dalam direktori controllers
        if (isset($url[0]) && file_exists("../app/controllers/" . $url[0] . ".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Pastikan jalur menuju controller sudah benar
        require_once __DIR__ . "/../controllers/" . $this->controller . ".php";

        // Inisialisasi controller
        $this->controller = new $this->controller;

        // var_dump($url); // untuk debug

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
            // var_dump($url);
        }




        // jalankan controller dan method dan kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/"); // Hapus slash di akhir URL
            $url = filter_var($url, FILTER_SANITIZE_URL); // Sanitasi URL
            $url = explode("/", $url); // Pecah URL menjadi array
            return $url;
        }
    }
}
