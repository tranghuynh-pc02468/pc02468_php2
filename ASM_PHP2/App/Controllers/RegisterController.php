<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;

class RegisterController extends BaseController
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
     * Hàm load view form đăng ký
     */
    function index()
    {
        // dữ liệu ở đây lấy từ repositories hoặc model

        $this->load->render('account/register');

    }

    /**
     * Hàm xử lý đăng ký
     */
    function store()
    {
        if (isset($_POST['submit'])) {
// 0 là KH, Ẩn
            if (empty($_POST['name'])) {
                $_SESSION['error']['name'] = "Vui lòng nhập thông tin!";
            }

            if (empty($_POST['email'])) {
                $_SESSION['error']['email'] = "Vui lòng nhập thông tin!";
            } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST['email'])) {
                $_SESSION['error']['email'] = "Vui lòng nhập đúng email!";
            } else {
                $user = new User();
                $check = $user->checkUserExist($_POST['email']);
                if ($check) {
                    $_SESSION['error']['exist'] = 'Tài khoản đã tồn tại vui lòng đăng nhập';
                    header('Location: ?url=RegisterController/index');
                }
            }

            if (empty($_POST['password'])) {
                $_SESSION['error']['password'] = "Vui lòng nhập thông tin!";
            } elseif (strlen($_POST['password']) < 5){
                $_SESSION['error']['password'] = "Mật khẩu phải trên 5 ký tự";
            }

            if ($_POST['password'] !== $_POST['password2']) {
                $_SESSION['error']['password2'] = 'Mật khẩu không trùng khớp';
            } elseif(empty($_POST['password2'])){
                $_SESSION['error']['password2'] = "Vui lòng nhập thông tin!";
            }

            if(!isset($_SESSION['error'])) {
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password2'],
                    'role' => '1',
                    'status' => '1'
                ];
            }
                $user = new User();
                $result = $user->registerUser($data);
                // var_dump($result);
                if ($result) {
                    header('location: ?url=LoginController/index');
                } else {
                    $message_error = "Đăng ký không thành công!";
                    header('location: ?url=RegisterController/index');
                }

        } else {
            echo 'ko submit';
        }
    }


}