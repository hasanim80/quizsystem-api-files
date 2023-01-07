<?php 
include "../connect.php";
$questionid = filterRequest("id");
$question = filterRequest("question");
$A = filterRequest("A");
$B = filterRequest("B");
$C = filterRequest("C");
$D = filterRequest("D");
$stmt = $con->prepare(
    "UPDATE `questions_test` SET 
    `question`=?,`A`=?,`B`=?,`C`=?,`D`=? WHERE question_id = ?");

    $stmt->execute(array($question,$A,$B,$C,$D,$questionid));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>