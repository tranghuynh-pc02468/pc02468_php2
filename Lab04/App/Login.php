<?php

namespace App;
use App\Core\Database;
use \PDO;

class Login{
    private $_connection;

    private $_querry;
 
    public function __construct(){
        $this->_connection = new Database();
    }
   
    public function login(){
        if(isset($_SESSION['user'])){
            $name = $_SESSION['user']['name'];
            $email = $_SESSION['user']['email'];
            return '
            <div class="row">
            <h2>Xin chào {$name} - {$email}</h2>
            <a href="/logout">Đăng xuất</a>
            </div>
            ';


        }else{
            return '
            <div class="row">
                <div class="col-md-4 offset-md-4 border p-3">
                    <h2 class="text-center ">Đăng nhập</h2>
                    <form action="/loginUser" method="POST">
                        <div class="mb-3">
                            <label>Email:</label>
                            <input type="text" class="form-control" name="email">
                            <small class="text-danger">'.$_SESSION['error']['email'].'</small>
                        </div>
                        <div class="mb-3">
                            <label>Mật khẩu:</label>
                            <input type="password" class="form-control" name="password">
                            <small class="text-danger">'.$_SESSION['error']['password'].'</small>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="btn-submit">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
            
        ';
        }

        
    }


    public function loginUser(){
        if(isset($_POST['btn-submit'])){
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            if($this->emptyInput() == false){
                header("Location: /login");
                exit();
            }

            if($this->invalidEmail($this->email) == false){
                header("Location: /login");
                exit();
            }

            $this-> getUser($this->email, $this->password);
        }
        
    }

    public function getUser($email, $password){
        $sql = "SELECT * FROM users where email= '{$email}'";
        // $this->_connection->pdo_execute($sql);
        $stmt   = $this->_connection->pdo_get_connection()->prepare($sql);
        $stmt->execute();

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $checkPassword = password_verify($password, $user['password']);

        if($checkPassword == false){
            $_SESSION['error']['false'] = 'Email hoặc mt65 khẩu không trùng khớp';
            header ('Location: /login');

        }else{
            $_SESSION['user'] = $user;

        }
    }


    public function logout(){
        session_unset();
        session_destroy();
        header('location: /');
    }

    public function emptyInput(){
        if(empty($this->email)){
            $_SESSION['error']['email']  = "Vui lòng không bỏ trống";
            return false;
        }else if (empty($this->password)){
            $_SESSION['error']['password']  = "Vui lòng không bỏ trống";
            return false;
        }

        return true;
        
    }

    public function invalidEmail($email){
        var_dump( $email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['error']['email']  = "Vui lòng nhập email";
            return false;
        }
        return true;

        
    }

    
}