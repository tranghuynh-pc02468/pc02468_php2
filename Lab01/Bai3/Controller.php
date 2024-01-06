<?php

include 'Model.php';

//controller
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $user = get_user($email);
}

$list = getAll();
include 'View.php';