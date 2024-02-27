<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\User;
use App\Core\Request;

class UserController extends BaseController
{

    private $_renderBase;
    private $_user;

    private $_request;

    public $data;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     *
     */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new BaseRender();
        $this->_user = new User();
        $this->_request = new Request();
    }


    function index()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        // dữ liệu ở đây lấy từ repositories hoặc model
        $user = new User();
        $data = $user->getAllUser();


        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('user/list', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function create()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }

        $data = $this->_request->getField();


        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('user/add',$data);
        $this->_renderBase->renderAdminFooter();
    }

    function store()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }

        if ($this->_request->isPost()) {
            //set rules
            $this->_request->rules([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:4',
                'confirm_password' => 'required|match:password'
            ]);

            //set thông báo
            $this->_request->message([
                'name.required' => 'Vui lòng nhập thông tin!',
                'email.required' => 'Vui lòng nhập thông tin!',
                'email.email' => 'Nhập đúng định dạng email',
                'password.required' => 'Vui lòng nhập thông tin!',
                'password.min' => 'Mật khẩu từ 4 ký tự trở lên',
                'confirm_password.required' => 'Vui lòng nhập thông tin!',
                'confirm_password.match' => 'Mật khẩu không trùng khớp'
            ]);

            $validate = $this->_request->validate();
            //hiện lỗi
//        echo '<pre>';
//        print_r($this->_request->_errors);
//        echo '</pre>';
            if (!$validate) {
                $this->data['errors'] = $this->_request->errors();
                $this->data['old'] = $this->_request->getField();

                $this->_renderBase->renderAdminHeader();
                $this->_renderBase->renderAdminSidebar();
                $this->load->render('user/add',$this->data);
                $this->_renderBase->renderAdminFooter();
            } else {
                $password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
                $data = [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'password' => $password,
                    'status' => $_POST['status'],
                    'role' => $_POST['role'],
                ];
                $this->_user->createUser($data);
                $this->redirect('?url=UserController/index');

            }
//            $this->redirect('?url=UserController/create');

        } else {
            $this->redirect('?url=UserController/index');
        }

    }

    function edit($id)
    {
        // dữ liệu ở đây lấy từ repositories hoặc model
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        $user = new User();
        $data = $user->getOneUser($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('user/edit', $data);
        $this->_renderBase->renderAdminFooter();

    }

    function update($id)
    {
        if (isset($_POST['btn-submit'])) {
            $data = [
                'status' => $_POST['status'],
                'role' => $_POST['role'],
            ];

            $result = $this->_user->updateUser($id, $data);
            if ($result) {
                $this->redirect(ROOT_URL . '?url=UserController/index');
            } else {
                $this->redirect(ROOT_URL . '?url=UserController/edit/' . $id);
            }

        } else {
            var_dump('Chưa submit form');
        }
    }

    function delete($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }

        try {
            $this->_user->deleteUser($id);
            $_SESSION['mgs'] = '1';
        } catch (\Exception $e) {
            $_SESSION['mgs'] = '0';
        }

        header('Location: ?url=UserController/index');

    }

}
