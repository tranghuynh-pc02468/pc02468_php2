<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;
class LoginController extends BaseController
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


    /**
     * Hàm load form đăng nhập
     *
     */
    function index()
    {

        // $this->_renderBase->renderAdminHeader();
        $this->load->render('account/login');
        // $this->load->render('admin/product/index', $data);
        
    }

    /**
     * Hàm xử lý form đăng nhập
     */
    function store()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model
         // validation form
        if (isset($_POST['submit'])) {
            $user = new User();
            $check = $user->checkUserExist($_POST['email']);
// 0 là KH, Ẩn
//            if (empty($_POST['email'])) {
//                $_SESSION['error']['email'] = "Vui lòng nhập thông tin!";
//            } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST['email'])) {
//                $_SESSION['error']['email'] = "Vui lòng nhập đúng định dạng email!";
//            }
//
//            if (empty($_POST['password'])) {
//                $_SESSION['error']['password'] = "Vui lòng nhập thông tin!";
//            }

            if($check && password_verify($_POST['password'], $check['password'])){
                $_SESSION['user'] = $check;
                $this->redirect(ROOT_URL);
            }elseif(empty($_POST['email']) || empty($_POST['password'])){
                $_SESSION['error']['mgs'] = "Vui lòng nhập thông tin!";
                header('location: ?url=LoginController/index');
            }else{
                $_SESSION['error']['mgs'] = "Email hoặc mật khẩu không chính xác";
                header('location: ?url=LoginController/index');
            }


        } else {
            echo 'ko submit';
        }



    }


}