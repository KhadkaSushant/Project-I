<?php
require "../connection/connection.php";

$id = $_GET['did'];
$query = "SELECT * FROM designer WHERE did = '$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../admin/admin.css">

</head>
<body>
    <header class="header">
        <h2>Admin Dashboard </h2>
        
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
                <a href="../admin/enquiry.php">Manage Client</a>
            </li>
            <li>
            <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
            <a href="../admin/adminlogin.php" onclick = 'return Logout()'>Logout</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Update Projects </h1>
    </div>
    <div class="container">
  <form action="../authen/updatedesigner1.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="pid">ID</label> 
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['did']?>" name="did" placeholder="Enter ID">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['name']?>" name="name" placeholder="Enter Project Name">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['phone']?>" name="phone" placeholder="Enter date">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $row['address']?>" id="address" name="address" placeholder="Enter Designer Address">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="end_date">Description</label>
      </div>
      <div class="col-75">
      <textarea name="description" value="<?php echo $row['description']?>" id="description" rows="5" placeholder="Write the Designer Description"></textarea>
      </div>
    </div>
    
    <div class="row">
      <input type="hidden" name="did" value="<?php echo $row['did']?>">
      <button type="submit" value="Update" name="update">Update</button>
    </div>
  </form>
</div>

</body>
</html>




<script>

function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>