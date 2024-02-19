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



}