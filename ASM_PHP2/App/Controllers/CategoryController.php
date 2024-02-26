<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\Category;
use Exception;

class CategoryController extends BaseController
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
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        // dữ liệu ở đây lấy từ repositories hoặc model
        $user = new Category();
        $data = $user->getAllCategory();

        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('category/list', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function create()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('category/add');
        $this->_renderBase->renderAdminFooter();
    }

    function store()
    {
        if (isset($_POST['btn-submit'])) {
//            // var_dump($_POST);
            if (empty($_POST['name'])) {
                $_SESSION['error']['name'] = "Vui lòng nhập thông tin!";
            } else {
                $category = new Category();
                $data = $category->getAllCategory();
                foreach ($data as $item) {
                    if ($_POST['name'] == $item['name']) {
                        $_SESSION['error']['name'] = "Danh mục đã tồn tại!";
                    }
                }

            }


            if (!isset($_SESSION['error'])) {
                $data = [
                    'name' => $_POST['name'],
                    'status' => $_POST['status'],

                ];
                $category = new Category();
                $result = $category->createCategory($data);
                header('location: ?url=CategoryController/index');

            } else {
                header('location: ?url=CategoryController/create');
            }


        } else {
            echo 'ko submit';
        }
    }

    function edit($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }
        $category = new Category();
        $data = $category->getOneCategory($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('category/edit', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function update($id)
    {
        if (isset($_POST['btn-submit'])) {
            $name = $_POST['name'] ?? '';
            $status = $_POST['status'];
            if(empty($name)){
                $_SESSION['error']['name'] = "Nhập thông tin";
            }
            $category = new Category();
            $check = $category->checkExceptionCat($id);
            foreach ($check as $item) {
                if ($item['name'] == $_POST['name']) {
                    $_SESSION['error']['name'] = "Danh mục đã tồn tại!";
                }
            }

            if (!isset($_SESSION['error'])) {
                $data = [
                    'name' => $name,
                    'status' => $status,
                ];

                $category = new Category();
                $result = $category->updateCategory($id, $data);

                if ($result) {
                    // $data = $category->getAllCategory();

                    // $this->load->render('admin/category/index', $data);
                    header('location: ?url=CategoryController/index');
                } else {
                    var_dump('khong cap nhat');
                }
            } else {
                header('location: ?url=CategoryController/edit/' . $id);
            }

        } else {
            var_dump('ko post');
        }
    }

    function delete($id)
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }

        try {
            $category = new Category();
            $data = $category->deleteCategory($id);
            $_SESSION['mgs'] = "1";
        } catch (Exception $e) {
            $_SESSION['mgs'] = "0";
        }
        header('location: ?url=CategoryController/index');

    }

}
