<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function render($path = "/home")
{
    if ($path == '/') {
        $path = "/home";
    }
    $page_path = __DIR__ . "/pages" . $path . ".php";
    require(__DIR__ . "/layouts/auth/main.php");
}

render(isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : "/home");
