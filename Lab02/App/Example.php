<?php
namespace App;
// Lớp Xe
class Name
{
    public $name;
    public function __construct()
    {
        echo 'ví dụ';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

