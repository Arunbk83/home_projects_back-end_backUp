<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/favourite.php';
 
$database = new Database();
$db = $database->getConnection();

 
$favorites = new Favorites($db);
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// set user property values

$favorites->productId = $data['type'];
$favorites->product_unit_price = $data['userid'];
$favorites->product_qty = $data['couponid'];
$favorites->total_price = $data['productid'];
$favorites->userId = $data['loyalityid'];

// create the user
if($favorites->addcart()){
    
    $favorites_arr=array(
        "status" => true,
        "message" => "Successfully favorites added"
       
    );
}
else{
    $favorites_arr=array(
        "status" => false,
        "message" => "Order already exists"
    );
}
print_r(json_encode($favorites_arr));
?>