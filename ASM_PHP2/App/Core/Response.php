<?php

namespace App\Core;

class Response{
    public function redirect($uri=''){
        if(preg_match('~^(http|https)$~is',$uri)){
            $url = $uri;
        }else{
            $url = ROOT_URL.$uri;
        }
        header("Location: $url");
        exit;
    }

}