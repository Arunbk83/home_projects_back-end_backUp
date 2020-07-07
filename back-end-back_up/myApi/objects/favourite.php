<?php
class Favorites{
 
    // database connection and table name
    private $conn;
    private $table_name = "favorites";
 
    // object properties

    public $type;
    public $userid;
    public $couponid;
    public $productid;
    public $loyalityid;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function addcart(){
    
        // if($this->isAlreadyExist()){
        //     return false;
        // }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                type= '$this->type', userid='$this->userid', couponid= '$this->couponid', 	productid='$this->productid',  loyalityid= '$this->loyalityid'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
      
            return true;
      
    }
   
    // function isAlreadyExist(){
    //     $query = "SELECT *
    //         FROM
    //             " . $this->table_name . " 
    //         WHERE
    //         id='".$this->id."'";
    //     // prepare query statement
    //     $stmt = $this->conn->prepare($query);
    //     // execute query
    //     $stmt->execute();
    //     if($stmt->rowCount() > 0){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }
}

//
class Getfavorites{
 
    // database connection and table name
    private $conn;
    private $table_name = "favorites";
 
    // object properties

    public $userId;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function getFavorites(){
    
        // query to insert record
        $query =  "SELECT * FROM  favorites";
        // $query =  "SELECT * FROM  favorites A, bkmg_products B WHERE A.userId = '$this->userId' AND A.productId = B.productId ";
        // $query = "INSERT INTO
        //             " . $this->table_name . "
        //         SET
        //         cart_id= '$this->cart_id', productId='$this->productId', product_unit_price= '$this->product_unit_price', product_qty='$this->product_qty',  total_product_price= '$this->total_product_price', userId='$this->userId'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
        // $result = $stmt->fetch();
        //  print_r($result);
            return $stmt;
      
    }
   

}


class Delfavorites{
 
    // database connection and table name
    private $conn;
    private $table_name = "favorites";
 
    // object properties

    public $userId;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function delFavorites(){
    
        // query to insert record
        $query =  "DELETE FROM favorites WHERE id=3";
        // $query =  "SELECT * FROM  favorites A, bkmg_products B WHERE A.userId = '$this->userId' AND A.productId = B.productId ";
        // $query = "INSERT INTO
        //             " . $this->table_name . "
        //         SET
        //         cart_id= '$this->cart_id', productId='$this->productId', product_unit_price= '$this->product_unit_price', product_qty='$this->product_qty',  total_product_price= '$this->total_product_price', userId='$this->userId'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
        // $result = $stmt->fetch();
        //  print_r($result);
            return $stmt;
      
    }
   

}