<?php
// menjalankan sesion
if (!session_id()) session_start();

require_once "../app/init.php";


$app = new App();

echo "<br>";

// $cont = new Controller();
