<?php 
require_once realpath("vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$env=$_ENV['DB_PASS'];
echo $env;
?>