<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare user object
$user = new User($db);
$data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
// set ID property of user to be edited
$user->email = isset($data['email']) ? $data['email'] : die();

$user->password = isset($data['password']) ? $data['password'] : die();
// read the details of user to be edited
$stmt = $user->login();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "userId" => $row['userId'],
        "name" => $row['name'],
        "password" => $row['password'],
        "mobile" => $row['mobile'],
        "gender" => $row['gender'],
        "address" => $row['address'],
        "city" => $row['city'],
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}
// make it json format
print_r(json_encode($user_arr));
?>