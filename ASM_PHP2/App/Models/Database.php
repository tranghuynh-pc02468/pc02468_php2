<?php

namespace App\Models;

use PDO;
use PDOException;
use mysqli;
class Database
{
    private static $dbHost = 'localhost';

    private static $dbName = 'php_2';

    private static $dbUser = 'root';

    private static $dbPassword = '';

    private static $dbPort = '3306';


    public function PdO()
    {
        try {
            $conn = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }




}