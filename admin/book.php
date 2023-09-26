<?php
/*if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty booking');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Booking Updated');</script>";
    }
    elseif($_GET['error'] == 'none'){
        echo "<script>alert('Booking Deleted');</script>";
    }
    else{
        echo "<script>alert('Booking Added');</script>";
    }
}*/
require "../connection/connection.php";
session_start();
if(!empty($_SESSION['adminloginid'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>
<body>
    <header class="header">
    <img src="../admin/images/admin.png" width="150" height="50"/>
    </header>
    <aside>
        <ul>
        <li>
                <a href="../admin/admindashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="../admin/project.php">Manage Project</a>
            </li>
            <li>
                <a href="../admin/designer.php">Manage Interior Designer</a>
            </li>
            <li>
                <a href="../admin/book.php">Manage Booking</a>
            </li>
            <li>
                <a href="../admin/enquiry.php">Manage Client</a>
            </li>
            <li>
            <a href="../admin/adminlogin.php" onclick = 'return Logout()'>
            <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
            Logout</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Booking Designs </h1>
    <span id="errorblock">
        <?php
    if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "Empty booking";
    }
    elseif($_GET['error'] == 2){
        echo "Booking Updated";
    }
    elseif($_GET['error'] == 'none'){
        echo "Booking Deleted";
    }
    else{
        echo "Booking Added";
    }
}
?>
</span>
    </div>
    <table class="center" width="60%" cellspacing="7">  
      <tr class="heading">  
           
           <th>ID</th>  
           <th>Name</th>  
           <th>Email</th>  
           <th>Phone</th>   
           <th>Address</th>
           <th>Design</th>
           <th>Code of Design</th>
           <th colspan="2">Action</th>
      </tr>  
      <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM booking";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['design']."</td>";
        echo "<td>".$row['code']."</td>";
        echo "<td><a href='../authen/deletebook.php?id=".$row['id']."'><input type='submit' value='Delete' class='delete'></a></td>";
        echo "<td><a href='../authen/updatebook.php?id=".$row['id']."'><input type='submit' value='Update' class='update'></a></td>";
        echo "</tr>";
            }
        ?>
    </table>

    <?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>