<?php
include 'connect.php';
$regno=$_GET['updateregno'];
$sql="select * from crud where regno=$regno";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
    $regno=$row['regno'];
    $name=$row['name'];
    $maths=$row['maths'];
    $science=$row['science'];
    $social=$row['social'];
    $tamil=$row['tamil'];
    $english=$row['english'];
if(isset($_POST['submit'])){
$regno=$_POST['regno'];
$name=$_POST['name'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];
$tamil=$_POST['tamil'];
$english=$_POST['english'];
$sql="update crud set regno='$regno',name='$name',maths='$maths',science='$science',social='$social',tamil='$tamil',english='$english'  where regno='$regno'";
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
    <link rel="stylesheet" href="teacherspage.css">
    <title>student update page</title>
</head>
<body>
    <div class="teachersone">
    <div class="teacherstwo">
    <form method="POST"  class="form-teachers">
    <h2>Teachers panel</h2>
     <p>Enter the student register no:</p>
     <input type="text" name="regno" class="form-input" value=<?php echo $regno; ?>>
     <p>Enter the student name:</p>
     <input type="text" name="name" class="form-input" value=<?php echo $name; ?>>
     <p>Enter the maths mark:</p>
     <input type="text" name="maths" class="form-input" value=<?php echo $maths; ?>>
     <p>Enter the science mark:</p>
     <input type="text" name="science" class="form-input" value=<?php echo $science; ?>>
     <p>Enter the social mark:</p>
     <input type="text" name="social" class="form-input" value=<?php echo $social; ?>>
     <p>Enter the tamil mark:</p>
     <input type="text" name="tamil" class="form-input" value=<?php echo $tamil; ?>>
     <p>Enter the english mark:</p>
     <input type="text" name="english" class="form-input" value=<?php echo $english; ?>>
     <p></p>
     <button type="submit" class="btn" name="submit">Update</button>
     <button  name="back" class="btn" ><a href="display.php">back</a></button> 
     <div></div>
    </body>
</html>
