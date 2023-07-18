<?php
 
 $email = $_POST['email'];
 $password = $_POST['password'];
 

$conn = mysqli_connect("localhost", "root", "", "interior") or die("connection failed");
$sql = "INSERT INTO admin_login(username, email, password) VALUES ('{$username}','{$email}','{$password}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: index.php");

mysqli_close($conn);



?>