<?php 
include "../connect.php";
$useremail = filterRequest("useremail");

$stmt = $con->prepare("SELECT id FROM users_teachers_firebase WHERE `email` = ? AND users_status = 1");

$stmt->execute(array($useremail));

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success", "data"=>$data));
    }
    else{
        echo json_encode(array("status"=>"Faild , No Teacher Selected"));
    }
?>