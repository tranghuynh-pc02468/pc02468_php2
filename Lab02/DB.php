<?php

namespace Core;

use PDO;

class DB
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=php_2", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully Bài 1";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}

