<?php
require_once 'vendor/autoload.php';

use App\Core\Form;

//Bài tập làm thêm
use App\Models\User;
$user = new User('user');
$user->read(1, 1);


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-4 offset-md-4">
            <h2>Create an account</h2>
            <?php $form = Form::Begin('', 'post'); ?>

            <?php echo $form->Field('firstname'); ?>


            <?php echo $form->Field('lastname'); ?>


            <?php echo $form->Field('email'); ?>


            <?php echo $form->Field('password')->passwordField(); ?>


            <?php echo $form->Field('confirmPassword')->passwordField(); ?>

            <button class="btn btn-primary" type="submit">Submit</button>
            <?php echo Form::end(); ?>
        </div>
    </div>
</div>
</body>
</html>