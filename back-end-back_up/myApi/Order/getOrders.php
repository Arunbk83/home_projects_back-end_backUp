<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/order.php';
 
$database = new Database();
$db = $database->getConnection();
 
$order = new Getorder($db);
$data = json_decode(file_get_contents('php://input'), true);

$order->userId = $data['userId'];
    
// create the user
$stmt = $order->getOrder();

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
if($result){
    // create array
    $getorder_arr=array(
        "status" => true,
        "data" => $result
    );
}
else{
    $getorder_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}

// make it json format
print_r(json_encode($getorder_arr));
?>