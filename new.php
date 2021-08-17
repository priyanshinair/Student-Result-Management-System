<?php

include 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

<div class="form-popup" id="myForm">
  <center><form action="authentication.php" class="form-container" method="post">
    <h1>NEW STUDENT</h1>

    <label for="STUDENT NAME"><b>STUDENT ID</b></label>
    <input type="text" placeholder="Enter Name" name="name"  id="name" required>

    <label for="FATHER'S NAME"><b>FATHER'S NAME</b></label>
    <input type="text" placeholder="Enter Father's Name" name="fname" id="fname" required>

    <label for="COURSE"><b>COURSE</b></label>
    <input type="text" placeholder="Enter class " name="class" id="class" required>

    

    <button type="submit" class="btn">PROCEED</button>

    
  </form></center>
</div>
</body>
</html>



    
  