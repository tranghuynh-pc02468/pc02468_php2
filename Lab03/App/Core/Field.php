<?php

namespace App\Core;

class Field{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public string $type;
    public string $attribute;

    public function __construct(string $attribute)
    {
        $this -> type = self::TYPE_TEXT;
        $this -> attribute = $attribute;
    }

    public function __toString(){

    }

    public function passwordField(){

    }

    public function labels():array{

    }

    public function getLabel($attribute){

    }
}
