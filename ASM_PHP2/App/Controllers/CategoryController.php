<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\Category;

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
        // dữ liệu ở đây lấy từ repositories hoặc model
        $user = new Category();
        $data = $user -> getAllCategory();

        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('category/list', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function create()
    {
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
//            if(empty($_POST['name'])){
//                $_SESSION['error']['name'] = "Vui lòng nhập thông tin";
//                header('Location: ?url:CategoryController/create');
//            }
//            if(empty($_POST['status'])){
//                $_SESSION['error']['status'] = "Vui lòng chọn thông tin";
//            }

            $data = [
                'name' => $_POST['name'],
                'status' => $_POST['status'],

            ];
            $category = new Category();
            $result = $category->createCategory($data);
            // var_dump($result);
            if ($result) {
                header('location: ?url=CategoryController/index');
            } else {
                echo 'them loi';
            }



        } else {
            echo 'ko submit';
        }
    }

    function edit($id){
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
            $name = $_POST['name'];
            $status = $_POST['status'];

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
            var_dump('ko post');
        }
    }

}
