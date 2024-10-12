<?php

require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Progammer Kece");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));
$log->info("Hello World");
$log->info("Selamat Datang");