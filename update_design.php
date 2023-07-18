<?php
  include "connection.php";
  $id="";
  $name="";
  $email="";
  $phone="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
      header("location:save.php");
      exit;
    }
    $id = $_GET['id'];
    $sql = "select * from client where id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:save.php");
      exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];

  }
  else{
    $id = $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $sql = "update client set name='$name', email='$email', phone='$phone' where id=$id";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Layout Design</title>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
<body style="background-color: #ddd;">
    
    
    <section id="contact">
       
        <div class="contact_form">
            <div class="banner">
                <h2>Update Details</h2>
                <form action="connect.php"  method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

                    <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control"> <br>>
                    
                    <button type="update"  class="btn" name="update">Update</button>
        
                    
                </form>
                