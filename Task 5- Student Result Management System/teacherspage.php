<?php
include 'connect.php';

if(isset($_POST['submit'])){
$regno=$_POST['regno'];
$name=$_POST['name'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$tamil=$_POST['tamil'];
$english=$_POST['english'];
$sql="INSERT INTO crud (regno,name,maths,science,social,tamil,english) values('$regno','$name','$maths','$science','$social','$tamil','$english')";
$result=mysqli_query($con,$sql);
if($result){
   header("location:display.php");
}else{
    die(mysqli_error($con));
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student entery page</title>
    <link rel="stylesheet" href="teacherspage.css">
</head>
<body>
  
    <div class="teachersone">
    <div class="teacherstwo">
    
    <form method="POST"  class="form-teachers">
     <h2>Enter marks here: </h2><hr>
     <p>Enter the student register no:</p>
     <input type="text" name="regno" class="form-input">
     <p>Enter the student name:</p>
     <input type="text" name="name" class="form-input">
     <p>Enter the maths mark:</p>
     <input type="text" name="maths" class="form-input">
     <p>Enter the science mark:</p>
     <input type="text" name="science" class="form-input">
     <p>Enter the social mark:</p>
     <input type="text" name="social" class="form-input">
     <p>Enter the tamil mark:</p>
     <input type="text" name="tamil" class="form-input">
     <p>Enter the english mark:</p>
     <input type="text" name="english" class="form-input"><br>
     <p></p>
     <button type="submit" class="btn" name="submit">Submit</button>
     <button class="btn" name="back"><a href="display.php">Back</a></button> 
</div>
</div>
    </body>
</html>



 

