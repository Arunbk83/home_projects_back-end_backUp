<?php
class Order{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_orders";
 
    // object properties

    public $orderId;
    public $productId;
    public $product_unit_price;
    public $product_qty;
    public $total_price;
    public $userId;
    public $gst_amount;
    public $delivery_charges;
    
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
                orderId= '$this->orderId', productId='$this->productId', product_unit_price= '$this->product_unit_price', product_qty='$this->product_qty',  gst_amount= '$this->gst_amount', 	delivery_charges= '$this->delivery_charges', total_price= '$this->total_price', userId='$this->userId'";
    
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
            orderId='".$this->orderId."'";
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
class Getorder{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_orders";
 
    // object properties

    public $userId;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function getOrder(){
    
        // query to insert record
        $query =  "SELECT * FROM  bkmg_orders   WHERE  userId = '$this->userId' ";
        // $query = "INSERT INTO
        //             " . $this->table_name . "
        //         SET
        //         cart_id= '$this->cart_id', productId='$this->productId', product_unit_price= '$this->product_unit_price', product_qty='$this->product_qty',  total_product_price= '$this->total_product_price', userId='$this->userId'";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
        // $result = $stmt->fetch();
        //  print_r($stmt);
            return $stmt;
      
    }
   

}