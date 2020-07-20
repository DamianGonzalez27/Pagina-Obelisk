<?php 

require_once "./vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

use App\Kernel;

$app = new Kernel;

$app->run();