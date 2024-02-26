<?php

namespace App\Models;



class Category extends BaseModel{
//    protected $name ="User";
    public $tableName = 'categories';

    public $table = "categories";


    public function __construct(){

        parent::__construct();
    }

    public function getAllCategory(){
        return $this->getAll()->get();
    }

    public function createCategory($data){
        return $this->create($data);
    }

    public function getOneCategory($id){
//        return $this->select()->where('id','=',$id)->first();
        return $this->getOne($id);
    }

    public function checkExceptionCat($id){
        return $this->checkException($id)->get();
    }
    public function updateCategory($id, $data){
        return $this->update($id, $data);
    }

    public function deleteCategory($id){
        return $this->delete($id);
    }

}