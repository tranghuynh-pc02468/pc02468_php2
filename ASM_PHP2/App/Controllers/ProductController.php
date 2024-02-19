<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Core\BaseRender;
use App\Models\Product;
use App\Models\Category;
class ProductController extends BaseController
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
        $category = new Product();
        $data = $category -> getAllProduct();

        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('product/list', $data);
        $this->_renderBase->renderAdminFooter();
    }

    function create()
    {
        $category = new Category();
        $data = $category -> getAllCategory();

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('product/add', $data);
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

            // xử lý hình ảnh
            $old_name = $_FILES['image']['name'];
            $file_extension = pathinfo($old_name, PATHINFO_EXTENSION);
            $new_name = date('YmdHis').'.'.$file_extension;
            // echo $old_name .'<br>';
            // echo $file_extension.'<br>';
            // echo $new_name;
            // echo _DIR_ROOT_.'/uploads/';
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                _DIR_ROOT_.'/uploads/'.$new_name
            );

            //dimension: Kích thước  - material: Vật liệu
            $dimension = 'C'.$_POST['height'].' - R'.$_POST['width'].' - L'.$_POST['length'];

            $data = [
                'category_id' => $_POST['category_id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'price_sale' => $_POST['price_sale'],
                'quantity' => $_POST['quantity'],
                'image' => $new_name,
                'content' => $_POST['content'],
                'dimension' => $dimension,
                'material' => $_POST['material'],
                'status' => $_POST['status'],

            ];

            $category = new Product();
            $result = $category->createProduct($data);
            // var_dump($result);
            if ($result) {
                header('location: ?url=ProductController/index');
            } else {
                echo 'them loi';
            }



        } else {
            echo 'ko submit';
        }
    }

    function edit($id){
        $category = new Product();
        $data = $category->getOneProduct($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        $this->_renderBase->renderAdminHeader();
        $this->_renderBase->renderAdminSidebar();
        $this->load->render('product/edit', $data);
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

            $category = new Product();
            $result = $category->updateProduct($id, $data);

            if ($result) {
                // $data = $category->getAllCategory();

                // $this->load->render('admin/category/index', $data);
                header('location: ?url=ProductController/index');
            } else {
                var_dump('khong cap nhat');
            }
        } else {
            var_dump('ko post');
        }
    }

    function delete($id){
        $category = new Product();
        $data = $category->deleteProduct($id);

        // dữ liệu ở đây lấy từ repositories hoặc model
        if ($data) {
            $data = $category->getAllProduct();
            // $this->_renderBase->renderHeader();
            // $this->load->render('layouts/client/slider');
            // $this->load->render('admin/category/index', $data);
            header('location: ?url=ProductController/index');
        } else {
            echo 'Xoa loi';
        }
    }

}
