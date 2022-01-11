<?php

namespace Connection;

require './vendor/autoload.php';

use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable("./");
$dotenv->load();


function conn()
{
    $pdo = new \PDO('mysql:host=' . $_ENV["HOST"] . ';dbname=' . $_ENV["DBNAME"] . ';charset=utf8;', $_ENV["NAME"], $_ENV["PASS"]);
    return $pdo;
}