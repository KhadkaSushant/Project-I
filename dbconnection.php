<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "interior1";
$db_port = 3306;

//Create Connection
$data = mysqli_connect($db_host, $db_user, $db_password, $db_name, $db_port);

//Checking Connection
if($data===false){
    die("Connection Failed");
}else {
    echo"Connect";
}



?>