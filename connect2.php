<?php
$dsn = "mysql:host=localhost;dbname=countries_test"; //database source name
$user = "root";
$pass = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" //for arabic support
);


try {
    $con = new PDO($dsn , $user , $pass ,$option );  // for connection with database
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    include "functions.php";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>