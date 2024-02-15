<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class UserController extends BaseController
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
        $user = new User();
        $data = $user -> getAllUser();


        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('user/list', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function detail($id)
    {        
        // dữ liệu ở đây lấy từ repositories hoặc model

    }
}
