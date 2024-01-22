<?php
namespace App\Controllers\Admin;

class BaseController{
    public function __construct()
    {
        include _DIR_ROOT_.'/src/Views/Admin/index.php';
    }
}