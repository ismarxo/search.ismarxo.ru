<?php

use App\Application;

define('APP_START', microtime(true));

if (file_exists($loader = __DIR__.'/../framework/loader.php')) {
    require_once $loader;
}

require __DIR__ . '/../autoload.php';

$application = new Application();

$application->makeRequest();

$application->makeResponse();

$application->terminate();