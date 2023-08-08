<?php
    require "../connection/connection.php";
    if(isset($_POST['add'])){
        $id = $_POST['pid'];
        $p_type = $_POST['p_type'];
        $project_name = $_POST['project_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        
        $added_on = $_POST['added_on'];
        if(!empty($project_name) && !empty($start_date) && !empty($end_date)){
            
            $query = "INSERT INTO `project`(`pid`, `p_type`, `project_name`, `start_date`, `end_date`) VALUES ('$id','$p_type','$project_name','$start_date','$end_date')";
            $result = mysqli_query($con,$query);
            if($result){
                header("location:../admin/project.php?error=false");
            }
            else{
                header("location:../admin/project.php?error=1");
            }
        }
        else{
            header("location:../admin/project.php?error=1");
        }
    }
    else{
        die('error');
    }
?>