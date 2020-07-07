<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_users";
 
    // object properties
    // public $userid;
    public $name;
    public $password;
    public $mobile;
    public $address;
    public $email;
    public $gender;
    public $city;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function signup(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    password=:password,  email=:email";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        // $this->name=htmlspecialchars(strip_tags($this->name));
        $this->password=htmlspecialchars(strip_tags($this->password));
        // $this->mobile=htmlspecialchars(strip_tags($this->mobile));
        // $this->address=htmlspecialchars(strip_tags($this->address));
        $this->email=htmlspecialchars(strip_tags($this->email));
        // $this->gender=htmlspecialchars(strip_tags($this->gender));
        // $this->city=htmlspecialchars(strip_tags($this->city));

        // bind values
        // $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        // $stmt->bindParam(":mobile", $this->mobile);
        // $stmt->bindParam(":address", $this->address);
        $stmt->bindParam(":email", $this->email);
        // $stmt->bindParam(":gender", $this->gender);
        // $stmt->bindParam(":city", $this->city);
    
        // execute query
        if($stmt->execute()){
            $this->userid = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    function login(){
        // select all query
        $query = "SELECT
                   *
                FROM
                    " . $this->table_name . " 
                WHERE
                email='".$this->email."' AND password='".$this->password."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }

    function getAlUsers() {

  // select all query
  $query = "SELECT
  * FROM " . $this->table_name;
// prepare query statement
$stmt = $this->conn->prepare($query);
// execute query
$stmt->execute();

return $stmt;


    }

    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                email='".$this->email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}