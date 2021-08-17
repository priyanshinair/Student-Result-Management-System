

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>

html{
            background-color: #eaebee;
        }
        body{
            text-align: center;
        }
        table, th, td {
            border: 3px solid green;
            background-color:white;
            text-align: left;
            color:black;
        }
        th{
            padding:1%;
            background-color:white;
        }
        td{
            padding: .5%;
            text-transform: capitalize;
            background-color:white;
        
            color: black;
        }
</style>
</head>
<body>
    
<div class="main">
<div class="title">
    <h1>  STUDENT RESULT</h1>

    
    </div>
        <div class="login">
            <form action="display.php" method="post" name="login">
                <fieldset>
                   
                    <input type="text" name="name" placeholder="Enter Name" autocomplete="off"><br><br><br>
                    <input type="text" name="class" placeholder="Enter Class" autocomplete="off">
                   
                    <input type="submit" value="CHECK">
                </fieldset>
            </form>    
        </div>


        <h2>TERM 1</h2>
        <span >
        <table style="width:100%">
        <tr>
            <th>ENGLISH</th>
            <th>HINDI</th>
            <th>MATHS</th>
            <th>SCIENCE</th>
            <th>PERCENTAGE(%)</th>
        </tr>

<?php
include 'connection.php';


$name = $class= "";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

$name=$_POST['name'];
$class=$_POST['class'];


}

$query = "SELECT * FROM  result WHERE name = '$name' and  class = '$class'";
$result = mysqli_query($conn,$query);
if ($result) {
  if ($nr = mysqli_num_rows($result) > 0) {
  
    for ($i=0; $i < $nr; $i++) { 
        $element =mysqli_fetch_assoc($result);
        echo "<tr><td>".$element['english']."</td>";
        echo "<td>".$element['hindi']."</td>";
        echo "<td>".$element['maths']." </td>";
        echo "<td>".$element['science']." </td>";
        echo "<td>".(($element['maths']+$element['english']+$element['hindi']+$element['science'])/400)*100;" </td></tr>";
    }

  } else {
    echo 'not found';
  }
} else {
  echo 'Error: '.mysqli_error();
}



?>
</span>
</table>
<br>
<br>
<br>
<br>
<br>



<div class="title">
    <h2>TERM 2</h2>
</div>

<span >
        <table style="width:100%">
        <tr>
            <th>ENGLISH</th>
            <th>HINDI</th>
            <th>MATHS</th>
            <th>SCIENCE</th>
            <th>PERCENTAGE(%)</th>
        </tr>

<?php
include 'connection.php';


$name = $class= "";

if( $_SERVER["REQUEST_METHOD"] == "POST"){

$name=$_POST['name'];
$class=$_POST['class'];


}

$query = "SELECT * FROM  result2 WHERE name = '$name' and  class = '$class'";
$result = mysqli_query($conn,$query);
if ($result) {
  if ($nr = mysqli_num_rows($result) > 0) {
  
    for ($i=0; $i < $nr; $i++) { 
        $element =mysqli_fetch_assoc($result);
        echo "<tr><td>".$element['english']."</td>";
        echo "<td>".$element['hindi']."</td>";
        echo "<td>".$element['maths']." </td>";
        echo "<td>".$element['science']." </td>";
        echo "<td>".(($element['maths']+$element['english']+$element['hindi']+$element['science'])/400)*100;" </td></tr>";
    }

  } else {
    echo 'not found';
  }
} else {
  echo 'Error: '.mysqli_error();
}

?>
</span>