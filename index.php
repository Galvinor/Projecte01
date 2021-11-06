<?php

ini_set('display_errors','On');
session_start();
require 'vendor/autoload.php';
//access .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$_SESSION['nav']=['home'];
require 'config.php';
require 'src/router.php';

$controller=getRoute();
require APP.'/src/controllers/'.$controller.'.php';


