<?php

namespace App\Models;

use App\Interfaces\ModelInterface;

abstract class BaseModel implements ModelInterface
{
    protected $table;
    public function __construct($table)
    {
        $this->table = $table;
//        echo $table;
    }


    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function read($id, $condition)
    {
        // TODO: Implement read() method.
        echo 'Đây là hàm read trong BaseModel.php';
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}
