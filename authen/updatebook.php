<?php
require "../connection/connection.php";
$id = $_GET['id'];
$query = "SELECT * FROM booking WHERE id = '$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location:../admin/adminlogin.php");
}
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
    <h1> Update Services </h1>
    </div>
    <div class="container">
  <form action="../authen/updatebook1.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="id">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="id" value="<?php echo $row['id']?>" placeholder="Enter ID">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="name">Enter Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" value="<?php echo $row['name']?>" placeholder="Enter name">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Enter Email">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" value="<?php echo $row['phone']?>" placeholder="Enter Phone">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" value="<?php echo $row['address']?>" placeholder="Enter Address">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="design">Design</label>
      </div>
      <div class="col-75">
        <input type="text" id="design" name="design" value="<?php echo $row['design']?>" placeholder="Enter design">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="code">Code of design</label>
      </div>
      <div class="col-75">
        <input type="text" id="code" name="code" value="<?php echo $row['code']?>" placeholder="Enter code">
      </div>
    </div>

    
      <div class="row">
      <input type="hidden" name="id" value="<?php echo $row['id']?>">
      <button type="submit" value="Update" name="update" id="update">Update</button>
    </div>
  </form>
</div>
    </div>
</body>
    </html>

<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
        
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $design = $_POST['design'];
    $code = $_POST['code'];
    
    
     if(!empty($name)){
        //$date = date("Y-m-d");
        $query = "UPDATE booking SET name = '$name', email = '$email', phone = '$phone', address = '$address', design = '$design', code = '$code' WHERE id = '$id'";
        $result = mysqli_query($con,$query);
        if($result){
            header("location:../admin/book.php?error=2");
        }
        else{
            header("location:../admin/book.php?error=1");
        }
    }
    else{
        header("location:../admin/book.php?error=1");
    }
 }
else{
    die('error');
}
?>

<script>

function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>