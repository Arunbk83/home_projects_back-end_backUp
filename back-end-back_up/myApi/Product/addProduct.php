<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/products.php';
 
$database = new Database();
$db = $database->getConnection();
 
$product = new Product($db);
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// set user property values
$product->productId = $data['productId'];
$product->product_name = $data['product_name'];
$product->product_description = $data['product_description'];
$product->product_price = $data['product_price'];
$product->product_type = $data['product_type'];
$product->product_small_image = $data['product_small_image'];
$product->product_image_1 = $data['product_image_1'];
$product->product_image_2 = $data['product_image_2'];
$product->product_image_3 = $data['product_image_3'];
$product->product_image_4 = $data['product_image_4'];
$product->product_image_5 = $data['product_image_5'];
$product->product_stock = $data['product_stock'];
$product->product_color = $data['product_color'];
// create the user
if($product->addProducts()){
    
    $product_arr=array(
        "status" => true,
        "message" => "Successfully Signup!"
       
    );
}
else{
    $product_arr=array(
        "status" => false,
        "message" => "User already exists!"
    );
}
print_r(json_encode($product_arr));
?>