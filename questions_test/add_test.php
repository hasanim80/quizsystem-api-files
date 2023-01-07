<?php 
include "../connect.php";

//$teacher = filterRequest("teacher"); // This string will be used in flutter
$question = filterRequest("question");
$A = filterRequest("A");
$B = filterRequest("B");
$C = filterRequest("C");
$D = filterRequest("D");
$userid = filterRequest("userid");

$stmt = $con->prepare(
    "INSERT INTO `questions_test`(`question`,`A`,`B`,`C`,`D`,`questions_users`,`question_status`) VALUES (?,?,?,?,?,?,1)
    ");

    $stmt->execute(array($question,$A,$B,$C,$D,$userid));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>