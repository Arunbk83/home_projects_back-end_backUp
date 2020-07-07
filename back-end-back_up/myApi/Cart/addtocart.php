<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/cart.php';
 
$database = new Database();
$db = $database->getConnection();
 
$cart = new Cart($db);
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// set user property values
$rndNumber = rand(999,999999);
$prefix = 'BKMGCRN';

$concati = $prefix.$rndNumber;
// print_r($rndNumber);
$cart->cart_id = $concati;
$cart->productId = $data['productId'];
$cart->product_unit_price = $data['product_unit_price'];
$cart->product_qty = $data['product_qty'];
$cart->total_product_price = $data['total_product_price'];
$cart->userId = $data['userId'];

// create the user
if($cart->addcart()){
    
    $cart_arr=array(
        "status" => true,
        "message" => "Successfully cart added!"
       
    );
}
else{
    $cart_arr=array(
        "status" => false,
        "message" => "Cart already exists!"
    );
}
print_r(json_encode($cart_arr));
?>