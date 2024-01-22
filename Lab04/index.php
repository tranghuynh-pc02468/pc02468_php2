<?php
require_once 'vendor/autoload.php';

use App\Core\Route;

//use App\Home;
$router = new Route();

//$route -> register(
//    '/', function (){
//        echo '<h2>Trang chủ</h2>';
//}
//);


$router
    ->register(
        '/home', [App\Home::class, 'index'])
    ->register(
        '/invoices', [App\Invoices::class, 'index'])
    ->register(
        '/invoices/create', [App\Invoices::class, 'create'])
;

echo $router->resolve($_SERVER['REQUEST_URI']);
