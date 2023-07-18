<?php
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

$conn = mysqli_connect("localhost", "root", "", "interior") or die("connection failed");
$sql = "INSERT INTO client(name, email, phone, message) VALUES ('{$name}','{$email}','{$phone}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: Contact.php");

mysqli_close($conn);

?>











