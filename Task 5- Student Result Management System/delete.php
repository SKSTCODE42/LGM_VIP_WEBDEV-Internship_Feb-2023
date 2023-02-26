<?php
include 'connect.php';
if (isset($_GET['deleteregno'])){
    $regno=$_GET['deleteregno'];
    $sql = "DELETE FROM crud where regno = '$regno'";
    $result=mysqli_query($con,$sql);
        if($result){
            header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>