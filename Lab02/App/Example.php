<?php

namespace App;
// Lớp Xe
class Example
{
    private $_phone;
    public $age;
    public $name;

    public function __construct($name, $age, $_phone)
    {
//        echo 'ví dụ';
        $this->name = $name;
        $this->age = $age;
        $this->_phone = $_phone;
    }

    public function getName()
    {
        echo "My name is $this->name";
    }

    public function __destruct()
    {
        echo "Tên: $this->name, tuổi: $this->age, SĐT: $this->_phone";
    }
}

