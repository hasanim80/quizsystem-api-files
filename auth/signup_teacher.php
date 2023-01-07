<?php 
include "../connect.php";

$email = filterRequest("email"); // This string will be used in flutter
$username = filterRequest("username"); // This string will be used in flutter
$uid = filterRequest("uid");
$displayname = filterRequest("displayname");
$usertype = filterRequest("usertype");
$department = filterRequest("department");


$stmt = $con->prepare(
    "INSERT INTO `users_teachers_firebase`(`email`,`uid`,`username`,`displayname`,`user_type`,`department`,`users_status`) VALUES (?,?,?,?,?,?,1)
    ");

    $stmt->execute(array($email,$uid,$username,$displayname,$usertype,$department));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>