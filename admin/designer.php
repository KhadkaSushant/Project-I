<?php
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "<script>alert('Empty Designer');</script>";
    }
    elseif($_GET['error'] == 2){
        echo "<script>alert('Designer Updated');</script>";
    }
    elseif($_GET['error'] == 'none'){
        echo "<script>alert('Designer Deleted');</script>";
    }
    else{
        echo "<script>alert('Designer Added');</script>";
    }
}
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
        <h2>Admin Dashboard</h2>
        
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
            <a href="../admin/adminlogin.php" onclick = 'return Logout()'>
            <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
            Logout</a>
            </li>
        </ul>
    </aside>
    <div class="content1">
    <h1> Interior Designer Record</h1>
    </div>
    <div class="container">
  <form action="../authen/backenddesigner.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="did">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="did" name="did" placeholder="Enter ID">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Enter Designer Name">
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="phone" placeholder="Enter Phone">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="Enter Designer Address">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
      <textarea name="description" id="description" rows="5" placeholder="Write the Designer Description"></textarea>
      </div>
    </div>
    
    <div class="row">
      <button type="submit" value="Add" name="add" id="add">Add</button>
    </div>
  </form>
</div>
    
  </form>
</div>
    <table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>Designer ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Description</th>
    <th colspan="2">Action</th>
  </tr>
  
  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM designer";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
        <td>$row[did]</td>
        <td>$row[name]</td>
        <td>$row[phone]</td>
        <td>$row[address]</td>
        <td>$row[description]</td>
        <td><a href='../authen/deletedesigner.php?did=$row[did]'><input type='submit' value='Delete' class='delete'></a></td>
        <td><a href='../authen/updatedesigner.php?did=$row[did]'><input type='submit' value='Update' class='update'></a></td>
        </tr>
        ";
            }
        ?>
    </table>

    


</body>
</html>
<?php
}
else{
    header("location:../admin/admindashboard.php");
}
?>
<script>
//  function confirmDelete() {
//   return confirm("Are you sure want to delete this data?");
// }
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>
