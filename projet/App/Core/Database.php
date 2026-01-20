<?php

namespace App\Core;

use PDO;
use PDOException;
 
class Database
{
    private static ?Database $instance = null;
    private  PDO $conn;

    public function __construct() {
              try {
                $this->conn = new PDO( "mysql:host=localhost;dbname=MvcDatabase","root","");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             } catch (PDOException $e) {
                echo "errur in data base" . $e->getMessage();
            }
    }

    public function getinstance(): Database{
        if(self::$instance === null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public  function getConn(): PDO
    {
        return $this->conn;
    }
}

