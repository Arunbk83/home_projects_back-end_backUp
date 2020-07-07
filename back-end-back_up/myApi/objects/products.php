<?php

class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_products";
 
    // object properties
    // public $userid;
    public $productId;
    public $product_name;
    public $product_description;
    public $product_price;
    public $product_type;
    public $product_small_image;
    public $product_image_1;
    public $product_image_2;
    public $product_image_3;
    public $product_image_4;
    public $product_image_5;
    public $product_stock;
    public $product_color;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function addProducts(){
    
        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                productId=:productId, product_name=:product_name, product_description=:product_description, product_price=:product_price,  product_type=:product_type, product_small_image=:product_small_image, product_image_1=:product_image_1, product_image_2=:product_image_2, product_image_3=:product_image_3, product_image_4=:product_image_4, product_image_5=:product_image_5, product_stock=:product_stock, product_color=:product_color";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->productId=htmlspecialchars(strip_tags($this->productId));
        $this->product_name=htmlspecialchars(strip_tags($this->product_name));
        $this->product_description=htmlspecialchars(strip_tags($this->product_description));
        $this->product_price=htmlspecialchars(strip_tags($this->product_price));
        $this->product_type=htmlspecialchars(strip_tags($this->product_type));
        $this->product_small_image=htmlspecialchars(strip_tags($this->product_small_image));
        $this->product_image_1=htmlspecialchars(strip_tags($this->product_image_1));
        $this->product_image_2=htmlspecialchars(strip_tags($this->product_image_2));
        $this->product_image_3=htmlspecialchars(strip_tags($this->product_image_3));
        $this->product_image_4=htmlspecialchars(strip_tags($this->product_image_4));
        $this->product_image_5=htmlspecialchars(strip_tags($this->product_image_5));
        $this->product_stock=htmlspecialchars(strip_tags($this->product_stock));
        $this->product_color=htmlspecialchars(strip_tags($this->product_color));

        // bind values
        $stmt->bindParam(":productId", $this->productId);
        $stmt->bindParam(":product_name", $this->product_name);
        $stmt->bindParam(":product_description", $this->product_description);
        $stmt->bindParam(":product_price", $this->product_price);
        $stmt->bindParam(":product_type", $this->product_type);
        $stmt->bindParam(":product_small_image", $this->product_small_image);
        $stmt->bindParam(":product_image_1", $this->product_image_1);
        $stmt->bindParam(":product_image_2", $this->product_image_2);
        $stmt->bindParam(":product_image_3", $this->product_image_3);
        $stmt->bindParam(":product_image_4", $this->product_image_4);
        $stmt->bindParam(":product_image_5", $this->product_image_5);
        $stmt->bindParam(":product_stock", $this->product_stock);
        $stmt->bindParam(":product_color", $this->product_color);
    
        // execute query
        if($stmt->execute()){
            $this->productId = $this->conn->lastInsertId();
            return true;
        }
    
        return false;
        
    }
    // login user
    // function login(){
    //     // select all query
    //     $query = "SELECT
    //                *
    //             FROM
    //                 " . $this->table_name . " 
    //             WHERE
    //                 mobile='".$this->mobile."' AND password='".$this->password."'";
    //     // prepare query statement
    //     $stmt = $this->conn->prepare($query);
    //     // execute query
    //     $stmt->execute();
    //     return $stmt;
    // }

    function getAllProducts() {

  // select all query
  $query = "SELECT
  * FROM " . $this->table_name;
// prepare query statement
$stmt = $this->conn->prepare($query);



// execute query
$stmt->execute();

return $stmt;


    }


    function updateProduct() {
     //   $sql = "UPDATE bkmg_products SET product_stock=:product_stock WHERE productId=:productId";
      //  $dpo->prepare($sql)->execute($data);
        // select all query
       // $query = " UPDATE " . $this->table_name ." SET product_stock=:product_stock WHERE productId=:productId";

        // $dpo->prepare($sql)->execute($data);
        $query = "UPDATE bkmg_products SET product_stock = '234' WHERE productId = 'BKMGPR0001'";
      // prepare query statement
      $stmt = $this->conn->prepare($query);
//       // execute query
//       $this->productId=htmlspecialchars(strip_tags($this->productId));
// $this->product_stock=htmlspecialchars(strip_tags($this->product_stock));

// $stmt->bindParam(":productId", $this->productId);
// $stmt->bindParam(":product_stock", $this->product_stock);

$stmt->execute();
    
    // return true;

      
      
          }

    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
            productId='".$this->productId."'";
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

////   multipule classs 


class Updateproduct{
 
    // database connection and table name
    private $conn;
    private $table_name = "bkmg_products";
 
    // object properties
    // public $userid;
    public $productId;
    public $product_stock;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
    function addProducts(){
    
      $proid = $this->productId;   
      $prostock = $this->product_stock;
        // query to insert record
        // $query = "UPDATE bkmg_products SET product_stock =:prostock  WHERE productId =:proid";
        $query = "UPDATE bkmg_products set product_stock = '$prostock' WHERE productId = '$proid'";
        //product_stock WHERE productId=:productId";
        // prepare query statement
        // $query = "UPDATE bkmg_products SET product_stock = '234' WHERE productId = 'BKMGPR0001'";
        // prepare query statement
        // $stmt = $this->conn->prepare($query);
        $stmt = $this->conn->prepare($query);
        // execute query
  
  $stmt->execute();
        // sanitize
        // $this->productId=htmlspecialchars(strip_tags($this->productId));
       
       
        // $this->product_stock=htmlspecialchars(strip_tags($this->product_stock));
        //  print_r($this->productId);
        //    print_r($this->product_stock);
        // // bind values
       
// $stmt->bindParam(":productId", $this->productId);
// $stmt->bindParam(":product_stock", $this->product_stock);
        // print_r($stmt);
        // execute query
        // if($stmt->execute()){
        //     // $this->productId = $this->conn->lastInsertId();
        //     return true;
        // }
    
        // return false;
        return true;
        
    }
   
}