<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static ?PDO $conn = null;

    public static function getConn(){

        if(self::$conn == null){

            try{
            $host = 'mysql';
            $dbname = 'MvcDatabase';
            $user = 'root';
            $pass = 'root';
            $port = 3306;

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            self::$conn = new PDO($dsn, $user, $pass);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }
            catch(PDOException $e){
                die("Erreur de connexion au base de donnee " .$e->getMessage());
            }

        }
        return self::$conn;


    }
}
