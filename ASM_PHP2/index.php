<?php
require_once 'vendor/autoload.php';
define('_DIR_ROOT_', __DIR__);
//echo _DIR_ROOT_;
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
    $web_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
}else{
    $web_root = 'http://'.$_SERVER['HTTP_HOST'].'/';
}


define('__WEB_ROOT__',$web_root);
//echo __WEB_ROOT__;


use App\Controllers\Admin\BaseController;
//use App\Controllers\HomeController;

$base = new BaseController();

//new HomeController();
