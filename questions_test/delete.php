<?php 
include "../connect.php";
$questionid = filterRequest("id");


$stmt = $con->prepare(
"UPDATE questions_test SET question_status = 0 WHERE question_id = ?"
);

    $stmt->execute(array($questionid));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>