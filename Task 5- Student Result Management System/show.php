<?php
include 'connect.php';

if(isset($_POST['submit'])){
$regno=$POST['regno'];
$name=$POST['name'];
$maths=$POST['maths'];
$science=$POST['science'];
$social=$POST['social'];
$tamil=$POST['tamil'];
$english=$POST['english'];
$sql="insertv   into 'crud' (regno,name,maths,science,social,tamil,english) values('$regno','$name','$maths','$science','$social','$tamil','$english')";
$result=mysqli_query($con,$sql);
if($result){
    echo"data inserted successfully";
}else{
    die(mysqli_error($con));
}
}

?>