<?php 
include "../connect.php";
$displaynameforid = filterRequest("displaynameforid");

$stmt = $con->prepare("SELECT id FROM users_teachers_firebase WHERE `displayname` = ? AND users_status = 1");

$stmt->execute(array($displaynameforid));

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success", "data"=>$data));
    }
    else{
        echo json_encode(array("status"=>"Faild , No Teacher Selected"));
    }
?>