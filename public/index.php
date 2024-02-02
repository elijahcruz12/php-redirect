<?php

// Composer
require __DIR__ . '/../vendor/autoload.php';

// Dot ENV
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . ' /..');
$dotenv->load();

$redirectUrl = $_ENV['REDIRECT_URL'];

// Get the path from the URL on this site
$path = $_SERVER['REQUEST_URI'];

Redirect($redirectUrl . $path, true);

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}