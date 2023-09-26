<?php
 require "../connection/connection.php";
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM booking WHERE id = '$id'";
    $result = mysqli_query($con,$query);
    if ($result){
        header("location:../admin/book.php?error=none");
    }
}
else
{
    die ('error');
}
?>