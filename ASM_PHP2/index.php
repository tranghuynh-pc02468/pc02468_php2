<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once 'vendor/autoload.php';
define('_DIR_ROOT_', __DIR__);
define("ROOT_URL", "http://localhost:8000/");
//echo _DIR_ROOT_;

use App\Core\Route;

new Route;
