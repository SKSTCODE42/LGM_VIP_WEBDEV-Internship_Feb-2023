<!doctype html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="display.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
    
    <title>teachers panel</title>
  </head>
  <body>
    <button style=" margin-left:70px; margin-top:50px; border: none;
        color: white;
        background-color:#059862;
        border-radius:5px;
        padding: 10px 30px;" type="button" class="add-user"><a style="text-decoration: none;color: white;" href="teacherspage.php">Add</a></button>
    <div class="adjust">
   <table class="table table">
  <thead>
    <tr>
      <th scope="col">Regno</th>
      <th scope="col">Name</th>
      <th scope="col">Maths</th>
      <th scope="col">Science</th>
      <th scope="col">Social</th>
      <th scope="col">Tamil</th>
      <th scope="col">English</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <?php
include 'connect.php';
?>
<?php
$sql ="select * from crud";
$result=mysqli_query($con,$sql);
 if ($result) {
     while ($row = mysqli_fetch_assoc($result)){
        $regno=$row['regno'];
        $name=$row['name'];
        $maths=$row['maths'];
        $science=$row['science'];
        $social=$row['social'];
        $tamil=$row['tamil'];
        $english=$row['english'];
        echo' <tr>
        <th scope ="row">'.$regno.'</th>
        <td>'.$name.'</td>
        <td>'.$maths.'</td>
        <td>'.$science.'</td>
        <td>'.$social.'</td>
        <td>'.$tamil.'</td>
        <td>'.$english.'</td>
        <td><button class="button2"
        style=" border: none;
        color: white;
        background-color:#F22336;
        border-radius:5px;
        padding: 10px 20px;"><a style="text-decoration: none;color: white;" href="delete.php?deleteregno='.$regno.'">delete</a></button >
         <button class="button2" style="border: none;
         color: white;
         padding: 10px 20px; background-color:#059862; border-radius:5px;"><a style="text-decoration: none;color: white;"href="update.php?updateregno='.$regno.'">update</a></button ></td>
      </tr>';
     }
 }
?>
</table> 
</div>
   
  </body>
</html>


