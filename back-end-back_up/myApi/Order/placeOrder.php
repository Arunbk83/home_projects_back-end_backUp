<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/order.php';
 
$database = new Database();
$db = $database->getConnection();

 
$order = new Order($db);
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// set user property values
$rndNumber = rand(9999,999999);
$prefix = 'BKMGORD';

$concati = $prefix.$rndNumber;
// print_r($concati);
$order->orderId = $concati;
$order->productId = $data['productId'];
$order->product_unit_price = $data['product_unit_price'];
$order->product_qty = $data['product_qty'];
$order->total_price = $data['total_price'];
$order->userId = $data['userId'];
$order->gst_amount = $data['gst_amount'];
$order->delivery_charges = $data['delivery_charges'];

// create the user
if($order->addcart()){
    
    $order_arr=array(
        "status" => true,
        "message" => "Successfully order placed"
       
    );
}
else{
    $order_arr=array(
        "status" => false,
        "message" => "Order already exists"
    );
}
print_r(json_encode($order_arr));
?>