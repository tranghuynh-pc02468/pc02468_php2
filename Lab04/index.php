<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once 'vendor/autoload.php';
define('_DIR_ROOT_', __DIR__);
// echo _DIR_ROOT_;
use App\Core\Route;

//use App\Home;
$router = new Route();

// $route -> register(
//    '/', function (){
//        echo '<h2>Trang chủ</h2>';
// }
// );



?>

<!doctype html>
<html lang="en">

<head>
    <title>Lab 05</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <!-- <div class="container">
        
        <div class="row">
            <div class="col-md-4 offset-md-4">
            <div class="card mt-3">
                <div class="card-header">Lab 5 - Upload File</div>
                <div class="card-body">
                <?php 
                //     $router
                //     ->get(
                //         '/', [App\Home::class, 'form'])
                //     ->post(
                //         '/upload', [App\Home::class, 'upload'])
                    
                // ;
                
                // echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
                
                    ?>
                </div>
            </div>
                    
                

            </div>
        </div>
    </div> -->


    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Lab 5</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/form">Upload file</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class=" mt-3">
                <?php 
                    $router
                    ->get(
                        '/', [App\Home::class, 'index'])
                    ->get(
                        '/form', [App\Home::class, 'form'])
                    ->post(
                        '/upload', [App\Home::class, 'upload'])
                    ->get(
                        '/login', [App\Login::class, 'login'])
                    ->post(
                        '/loginUser', [App\Login::class, 'loginUser'])
                    ->get(
                        '/get', [App\Login::class, 'logout'])
                    
                ;
                
                echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
                
                    ?>
            </div>

        </main>
    </div>









    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>