<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/products.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$product = new Product($db);

// read the details of user to be edited
$stmt = $product->getAllProducts();

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
if($result){
    // create array
    $getproducts_arr=array(
        "status" => true,
        "data" => $result
    );
}
else{
    $getproducts_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}

// print_r($result);
// make it json format
print_r(json_encode($getproducts_arr));
?>