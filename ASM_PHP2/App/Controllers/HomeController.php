<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class HomeController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();
    }

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model
        $data = [

            "products" => [
                [
                    "id" => 1,
                    "name" => "Sản phẩm"
                ]
            ]
        ];

        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('home', $data);
        $this->_renderBase->renderAdminFooter();
        
    }

    function detail($id)
    {
        $data = [
            'action' => ROOT_URL . "CategoryController/edit/$id",
            "products" => [
                [
                    "id" => 1,
                    "name" => "Sản phẩm"
                ]
            ]
        ];

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->load->render('layouts/client/home_product', $data);
    }
    function profile($id)
    {
        $user = new User();
        $profile = $user->getOne($id);
        $data=$profile;
        // $data = [
        //     "products" => [
        //         [
        //             "id" => 1,
        //             "name" => "Sản phẩm"
        //         ]
        //     ]
        // ];

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->load->render('layouts/client/home_product', $data);
    }

    function Error(){
        $this->load->render('404');
    }
}
