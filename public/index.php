<?php
ob_start();
session_start();

// require dirname(__DIR__, 1) . "/source/init.php";
require dirname(__DIR__, 1) . "/vendor/autoload.php";
var_dump(2);
exit;
require __DIR__ . "/source/Rotas.php";


ob_end_flush();
