<?php 
include "../connect.php";
$emailforusertype = filterRequest("emailforusertype");

$stmt = $con->prepare("SELECT user_type FROM users_teachers_firebase WHERE `email` = ? AND users_status = 1");

$stmt->execute(array($emailforusertype));

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success", "data"=>$data));
    }
    else{
        echo json_encode(array("status"=>"Faild , No Teacher Selected"));
    }
?>