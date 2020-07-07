<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
$data = json_decode(file_get_contents('php://input'), true);
// set user property values
// $user->name = $data['name'];
$user->password = $data['password'];
// $user->mobile = $data['mobile'];
// $user->address = $data['address'];
$user->email = $data['email'];
// $user->gender = $data['gender'];
// $user->city = $data['city'];
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!"
       
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "User already exists!"
    );
}
print_r(json_encode($user_arr));
?>