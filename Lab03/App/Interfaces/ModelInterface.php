<?php

namespace App\Interfaces;

interface ModelInterface
{
    //các phương thức bắt buộc các hàm triển khai đều gọi (CRUD)
    /**
     * Hàm này dùng để lấy tất cả dữ liệu
     *
     * @return void
     */
    public function getAll();


    /**
     * Hàm này dùng tạo mới dl
     * @param array $data
     * @return mixed
     */
    public function create(array $data);


    /**
     * Hàm này dùng để lấy dl theo id
     * @param $id
     * @param $condition
     * @return void
     */
    public function read($id, $condition);


    /**
     * Hàm này dùng để cập nhật dl
     * @param $id
     * @param array $data
     * @return void
     */
    public function update($id, array $data);


    /**
     * Hàm này dùng để xóa dl
     * @param $id
     * @return void
     */
    public function delete($id);


}