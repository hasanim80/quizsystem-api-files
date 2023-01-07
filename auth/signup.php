<?php 
include "../connect.php";

$email = filterRequest("email"); // This string will be used in flutter
$username = filterRequest("username"); // This string will be used in flutter
$uid = filterRequest("uid");
$displayname = filterRequest("displayname");
$usertype = filterRequest("usertype");
$department = filterRequest("department");
$teacherstudent = filterRequest("teacherstudent");
$teacherstudentid = filterRequest("teacherstudentid");


$stmt = $con->prepare(
    "INSERT INTO `users_students_firebase`(`email`,`uid`,`username`,`displayname`,`user_type`,`department`,`teachers_students`,`teachers_students_id`,`users_status`) VALUES (?,?,?,?,?,?,?,?,1)
    ");

    $stmt->execute(array($email,$uid,$username,$displayname,$usertype,$department,$teacherstudent,$teacherstudentid));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>