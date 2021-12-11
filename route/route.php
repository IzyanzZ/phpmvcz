<?php

error_reporting(0);

require_once "../vendor/autoload.php";

use Izyanz\app\Core\Route;
use Izyanz\app\Core\Service;

$route = new Route();

$route->get("/", function () {
    Service::write("Hello, world!");
});

$route->run();