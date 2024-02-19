<?php

namespace App\Models;



class Product extends BaseModel{
//    protected $name ="User";
    public $tableName = 'products';

    public $table = "products";


    public function __construct(){

        parent::__construct();
    }

    public function getAllProduct(){
        return $this->getAll()->get();
    }

    public function getOneProduct($id){
        return $this->select()->where('id','=',$id)->first();
    }

    public function createProduct($data){
        return $this->create($data);
    }

    public function updateProduct($id, $data){
        return $this->update($id, $data);
    }

    public function deleteProduct($id){
        return $this->delete($id);
    }

}