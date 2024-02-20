<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;

class ForgotpasswordController extends BaseController
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


    function index()
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


        $this->_renderBase->renderAdminForgotpassword();
        // $this->load->render('account/login', $data);
        // $this->load->render('admin/product/index', $data);
        
    }

    function detail($id)
    {        
        // dữ liệu ở đây lấy từ repositories hoặc model

    }
}
