<?php
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
    <h1> Add Project </h1>
    </div>
    <div class="container">
  <form action="../authen/backendproduct.php" method="POST">
    <!-- <div class="row">
      <div class="col-25">
        <label for="pid">ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="pid" name="pid" placeholder="Enter ID">
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label for="p_type">Design type</label>
      </div>
      <div class="col-75">
        <select id="p_type" name="p_type">
          <option value="Select">--Select--</option>
          <option value="kitchen">Kitchen</option>
          <option value="bedroom">Bedroom</option>
          <option value="barthroom">Bathroom</option>
          <option value="living room">Living room</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="project_name">Project Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="project_name" name="project_name" placeholder="Enter Project Name">
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="start_date">Start Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="start_date" name="start_date" placeholder="Enter Start Date">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="end_date">End Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="end_date" name="end_date" placeholder="Enter End Date">
      </div>
    </div>
    
    <div class="row">
        
    <span id="errorblock">
<?php
    if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo "Please enter project name !";
    }
    elseif($_GET['error'] == 2){
        echo "Project Updated";
    }
    elseif($_GET['error'] == 'none'){
        echo "Project Deleted";
    }
    else{
        echo "Project Added";
    }
}

?>
</span>
<button type="submit" value="Add" name="add" id="add">Add</button>
    

    </div>
  </form>
</div>
    
  </form>
</div>

<table class="center" width="50%" cellspacing="7">
  <tr>
    <br><th>Project ID</th>
    <th>Design Type</th>
    <th>Project Name</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th colspan="2">Action</th>
  </tr>
  
  <?php
        require "../connection/connection.php";
        //$date=date("Y-m-d");
        $query="SELECT * FROM project";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_assoc($result)){
        echo"
        <tr>
        <td>$row[pid]</td>
        <td>$row[p_type]</td>
        <td>$row[project_name]</td>
        <td>$row[start_date]</td>
        <td>$row[end_date]</td>
        <td><a href='../authen/deleteproduct.php?pid=$row[pid]'><input type='submit' value='Delete' class='delete'></a></td>
        <td><a href='../authen/updateproduct.php?pid=$row[pid]'><input type='submit' value='Update' class='update'></a></td>
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
