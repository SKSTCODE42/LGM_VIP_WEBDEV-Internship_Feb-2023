<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Result</title>
</head>
<body>
  
  <div class="result-box">
   <div class="result-boxx">
   <h1 class="result-heading">Result</h1>
   <div class="result-padding">
    <?php
    $regno = $_POST['regno'];

    $conn =mysqli_connect("localhost","root","","crudoperation");

    $sql ="SELECT * FROM crud WHERE regno = '$regno'";
    $runQuery = mysqli_query($conn,$sql);

    $countRows=mysqli_num_rows($runQuery);

    if ($countRows >0){
        while ($row = mysqli_fetch_array($runQuery)){
            echo" <p>Name: " . $row['name']."<br>";
            echo" <p> Regno: " . $row['regno']."<br>";
            echo" <p>Maths: " . $row['maths']."<br>";
            echo" <p>Science: " . $row['science']."<br>";
            echo" <p>Social: " . $row['social']."<br>";
            echo" <p>Tamil: " . $row['tamil']."<br>";
            echo" <p>English: " . $row['english']."<br>";
            
        }
    
    }
?>
</div>
</div>
</div>
</body>
</html>