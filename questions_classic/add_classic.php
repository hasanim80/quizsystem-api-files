<?php 
include "../connect.php";

//$username = filterRequest("username"); // This string will be used in flutter
$question = filterRequest("question");
$answer = filterRequest("answer");
$userid = filterRequest("userid");

$stmt = $con->prepare(
    "INSERT INTO `questions_classic`(`question`,`answer`,`question_classic_users`,`question_classic_status`) VALUES (?,?,?,1)
    ");

    $stmt->execute(array($question,$answer,$userid));

    $count = $stmt->rowCount();
    if($count>0){
        echo json_encode(array("status"=>"success"));
    }
    else{
        echo json_encode(array("status"=>"fail"));
    }
?>