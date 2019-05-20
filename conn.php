<?php
$production_mode = false;
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "";
$DB_NAME = "test";

$result = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

if($production_mode === true){
    if($result){
        echo "Connected with DB";
    }
    else{
        echo "Not Connected with DB";
    }
}
?>
