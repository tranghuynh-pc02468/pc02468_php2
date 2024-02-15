<?php
session_start();
require_once 'vendor/autoload.php';
define('_DIR_ROOT_', __DIR__);
define("ROOT_URL", "http://localhost:8000/");
//echo _DIR_ROOT_;

use App\Core\Route;

new Route;
