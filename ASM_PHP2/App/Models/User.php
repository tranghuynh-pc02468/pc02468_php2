<?php

namespace App\Models;



class User extends BaseModel{
    protected $name ="User";
    public $tableName = 'users';

    public $table = "users";


    public function __construct(){
  
        parent::__construct();
    }

    public function getAllUser(){
        return $this->getAll()->get();
    }

    public function checkUserExist($email){
        return $this->select()->where('email', '=', $email)->first();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data){
        // $tableName = $this->tableName;
        $user = $this->insert($this->table,$data);
    }

    public function create($data){
        var_dump($this->tableName);
    }
}