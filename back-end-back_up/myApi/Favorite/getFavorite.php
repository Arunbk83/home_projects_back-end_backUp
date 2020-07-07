<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/favourite.php';
 
$database = new Database();
$db = $database->getConnection();
 
$favorites = new Getfavorites($db);
$data = json_decode(file_get_contents('php://input'), true);

$favorites->userid = $data['userid'];
    
// create the user
$stmt = $favorites->getFavorites();

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
if($result){
    // create array
    $getFavorites_arr=array(
        "status" => true,
        "data" => $result
    );
}
else{
    $getFavorites_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
}

// make it json format
print_r(json_encode($getFavorites_arr));
?>