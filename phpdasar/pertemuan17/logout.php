<?php

// jalanlkan session
session_start();

// akhiri session dgn berbagai cara krna biasanya kalo pake saatu cara kadang tdk berhasil
$_SESSION = [];
session_unset();
session_destroy();


// matikan cookie
setcookie("id", "", time() - 3600);
setcookie("key", "", time() - 3600);

// arahkan ke login.php
header("Location: login.php");
exit;
