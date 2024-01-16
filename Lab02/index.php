<?php
//--- Bài 1, Bài 2
//require 'DB.php';
//use Core\DB;
//$db = new DB();

//--- Bài 3
//spl_autoload_register(function($class){
////    var_dump($class);
//    include $class.'.php';
//});
//use App\Database;
//$db = new Database();

//--- Bài 5
require_once 'vendor/autoload.php';

use App\Core\Route;
use App\Model\BaseModel;
use App\Controller\BaseController;
use App\Example;

$route = new Route();
$model = new BaseModel();
$controller = new BaseController();
//
$db = new Example(12,12,'0987654321');
 echo ($db->name + $db->age);
//var_dump($db -> getName());

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 2 </title>
</head>
<body>
<br> <h1>Trang chủ</h1> <br>
</body>
</html>
