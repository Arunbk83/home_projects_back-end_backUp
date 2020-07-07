<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/cart.php';
 
$database = new Database();
$db = $database->getConnection();
 
$cart = new Getcart($db);
$data = json_decode(file_get_contents('php://input'), true);

$cart->userId = $data['userId'];
    
// create the user
$stmt = $cart->getCart();

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
if($result){
    // create array
    $getcart_arr=array(
        "status" => true,
        "data" => $result
    );
}
else{
    $getcart_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}

// make it json format
print_r(json_encode($getcart_arr));
?>