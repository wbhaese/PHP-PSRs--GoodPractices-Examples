<?php

require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('LogName');
$log->pushHandler(new StreamHandler('logs.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');