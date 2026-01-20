<?php
namespace App\Models;
use  App\Core\Database;
use PDO;

class User{
    private INT $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $role;
 

    private PDO $conection;


    public function __construct()
    {
        $database = new Database();
        $this->conection = $database->getConn();
     }
    
     
    public function getId()
    {
        return $this->id;
    }

     
    public function setId($id)
    {
        $this->id = $id;

    }
    public function getFirstname()
    {
        return $this->firstname;
    }
 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

     }

     
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

     }

    public function getPassword()
    {
                return $this->password;
    }

         
    public function setPassword($password)
    {
     $this->password = $password;

    }
    

    public function getRole()
    {
        return $this->role;
    }
 
    public function setRole($role)
    {
        $this->role = $role;

    }

   public function findAll() {
        $query = "SELECT * FROM users";
        $stmt = $this->conection->prepare($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getUser($email) {
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $this->conection->prepare($query);
    $stmt->execute([$email]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
    return $stmt->fetch();
   }
    public function getUserbyid($id) {
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->conection->prepare($query);
    $stmt->execute([$id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
    return $stmt->fetch();
   }

    public function create() {
        $sql = "INSERT INTO users
            (`firstname`, `lastname`,`email`,`password`,`role`)
            VALUES (?, ?,?,?,?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$this->firstname, $this->lastname, $this->email,$this->password,$this->role]);

        $this->id = $this->conection->lastInsertId();
    }
 public function deletuser($id){
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $this->conection->prepare($sql);
    $stmt->execute([$id]);
 }

 public function updateuser() {
        $query = 
            "UPDATE users    
             SET firstname='" . $this->firstname . "' , lastname='". $this->lastname 
             ."' , email='". $this->email ."' , password='". $this->password . "' , role='". $this->role .
              "' WHERE id = " . $this->id;
      $stmt = $this->conection->prepare($query);
      $stmt->execute();
        return 0;
    }

    
}