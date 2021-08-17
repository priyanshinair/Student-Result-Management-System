<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Document</title>
</head>
<body>
    


<div class="title">
    <h3>  UPDATE STUDENT RESULT</h>
    </div>

    <div class="main">
        <div class="login">
            <form action="exist.php" method="post" name="login">
                <fieldset>
                   
                    <input type="text" name="name" placeholder="Enter Name" autocomplete="off">
                    <input type="text" name="fname" placeholder="Enter Father Name" autocomplete="off">
                    <input type="submit" value="CHECK">
                </fieldset>
            </form>    
        </div>
       


</body>
</html>

<?php
include 'connection.php';


$name = $fname = "";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

$name=$_POST['name'];
$fname=$_POST['fname'];

}

$query = "SELECT * FROM student WHERE name = '$name'";
$result = mysqli_query($conn,$query);
if ($result) {
  if (mysqli_num_rows($result) > 0) {
  
    header("Location: sem.php");
  } else {
    //echo 'not found';
  }
} else {
  echo 'Error: '.mysql_error();
}

