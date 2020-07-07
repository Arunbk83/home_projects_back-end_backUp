<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
// $user->username = isset($_GET['username']) ? $_GET['username'] : die();
// $user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of user to be edited
$stmt = $user->getAlUsers();

$result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
// print_r($result);
// make it json format
print_r(json_encode($result));
?>