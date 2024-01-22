<?php

namespace App\Core;

class Form
{
    public static function Begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function Field($attribute)
    {
        return new Field($attribute);
    }
}
