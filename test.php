<?php
require_once(__DIR__.'/vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('test');
$log -> pushHandler(new StreamHandler(__DIR__.'/test.log', Logger::WARNING));

$log->warning('Foo' , array('user' => 'admin', 'time' => date('H:i:s d.m.Y')));
$log->error('Bar');

