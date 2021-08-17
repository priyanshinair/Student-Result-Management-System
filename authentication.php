<!-- NEW STUDENT -->

<?php


include 'connection.php';


$n = $f = $c = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $n = $_POST['name'];
    $f = $_POST['fname'];
    $c = $_POST['class'];
   
}
    $sql_query = "INSERT INTO student (name,fname,class) VALUES ('$n', '$f', '$c')";
    if(mysqli_query($conn,$sql_query)){

       // echo "RECORD INSERTED SUCCESSFULLY !";
    }else{
       // echo "Transaction successful !";
    }
    mysqli_close($conn)
        ?>



