<?php
require_once __DIR__.'/../vendor/autoload.php';

ini_set('display_errors', 0);

define("ROOT_PATH", __DIR__ . "/..");

$app = new Silex\Application();
require __DIR__ . '/../resources/config/prod.php';
require __DIR__ .'/../src/app.php';
$app->run();




