<?php

// jalanlkan session
session_start();

// akhiri session dgn berbagai cara krna biasanya kalo pake saatu cara kadang tdk berhasil
$_SESSION = [];
session_unset();
session_destroy();

// arahkan ke login.php
header("Location: login.php");
exit;
