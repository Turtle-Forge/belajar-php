<?php
spl_autoload_register(function ($class) {
    // pertemuan13\app\User = ["pertemuan13", "app", "User"]
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/app/" . $class . ".php";
});

spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once __DIR__ . "/service/" . $class . ".php";
});
