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
    
<div class="container">
    <div class="caption">
        <h1>TERM 1</h1>
        <h1>ENTER STUDENT MARKS</h1>
</div>
</div>

<div class="main">
        <div class="login">
            <form action="term1.php" method="post" name="login">
                <fieldset>
                   
                    <input type="text" name="name" placeholder="Enter Name" autocomplete="off">
                    <input type="text" name="class" placeholder="Enter Class" autocomplete="off">
                    <input type="text" name="eng" placeholder="Enter English Marks" autocomplete="off">
                    <input type="text" name="hin" placeholder="Enter Hindi Marks" autocomplete="off">
                    <input type="text" name="mat" placeholder="Enter Maths Marks" autocomplete="off">
                    <input type="text" name="sci" placeholder="Enter Science Marks" autocomplete="off">
                    <input type="submit" value="SUBMIT">
                </fieldset>
            </form>    
        </div>



</body>
</html>

<?php


include 'connection.php';


$name = $eng = $hin = $mat = $sci = $class= "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $eng = $_POST['eng'];
    $hin = $_POST['hin'];
    $mat = $_POST['mat'];
    $sci = $_POST['sci'];
   
}
    $sql_query = "INSERT INTO result (name,class,english,hindi,maths,science) VALUES ('$name','$class', '$eng', '$hin','$mat','$sci')";
    if(mysqli_query($conn,$sql_query)){

       
       
    }else{
        echo "Record Inserted Successfully !";
    }
    mysqli_close($conn)
        ?>