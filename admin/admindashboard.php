<?php
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
        <li><img src="user.png" width="100" height="100"/></li>
        <li> <span style="color:#61a5c5;">Hello</span> <b style="color:#61a5c5;">Admin</b></li>
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
    <div class="content">
        <h1 style> Welcome To The Interior Design Management System Admin</h1><br><br>
    </div>

  


</body>
</html>
<script>
function Logout() {
  return confirm("Are you sure want to Log Out?");
}
</script>