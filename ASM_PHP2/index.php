<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
define('_DIR_ROOT_', __DIR__);
$web = 'http://'.$_SERVER['SERVER_NAME'].'/ASM_PHP2/';
//echo $web;
define("ROOT_URL", $web);
//echo _DIR_ROOT_;

use App\Core\Route;

new Route;
