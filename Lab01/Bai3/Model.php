<?php
 include 'config.php';
    function get_user($email){ 
       
        $db = new connect();
        $sql = "SELECT * FROM users WHERE email = '$email' ";
        return $db -> pdo_query_one($sql);

    }

    function getAll(){
        $db = new connect();
        $sql = "SELECT * FROM users";
        return $db -> pdo_query($sql);

    }

    


