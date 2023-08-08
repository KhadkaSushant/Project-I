<?php
require "../connection/connection.php";
if(isset($_POST['update'])){
    $id = $_POST['pid'];
    $project_name = $_POST['project_name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    
    $query = "UPDATE `project` SET `project_name`='$project_name',`start_date`='$start_date',`end_date`='$end_date'";
    $result=mysqli_query($con,$query);
    if ($result){
        header("location:../admin/project.php?error=2");
    }
    else{
        header("location:../admin/project.php?error=1");
    }
}
else
{
    die ('error');
}

?>