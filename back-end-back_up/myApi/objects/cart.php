<?php
class Cart{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_cart_items";
 
    // object properties

    public $cart_id;
    public $productId;
    public $product_unit_price;
    public $product_qty;
    public $total_product_price;
    public $userId;
    
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function addcart(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                cart_id= '$this->cart_id', productId='$this->productId', product_unit_price= '$this->product_unit_price', product_qty='$this->product_qty',  total_product_price= '$this->total_product_price', userId='$this->userId'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
      
            return true;
      
    }
   
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
            cart_id='".$this->cart_id."'";
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

//
class Getcart{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_cart_items";
 
    // object properties

    public $userId;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function getCart(){
    
        // query to insert record
        $query =  "SELECT * FROM  bkmg_cart_items A, bkmg_products B WHERE A.userId = '$this->userId' AND A.productId = B.productId ";
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