<?php 
include "../connect.php";
$userid = filterRequest("id");

$stmt = $con->prepare("SELECT * FROM questions_test WHERE `questions_users` = ? AND question_status = 1");

$stmt->execute(array($userid));

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success", "data"=>$data));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>